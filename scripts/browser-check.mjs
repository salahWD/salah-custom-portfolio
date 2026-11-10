import fs from 'node:fs';
import assert from 'node:assert/strict';

const base = process.env.PORTFOLIO_URL || 'http://127.0.0.1:8000';
const endpoint = process.env.CHROME_DEBUG_URL || 'http://127.0.0.1:9222';
const target = await (await fetch(endpoint + '/json/new?about:blank', {method:'PUT'})).json();
const socket = new WebSocket(target.webSocketDebuggerUrl);
await new Promise((resolve,reject) => { socket.onopen = resolve; socket.onerror = reject; });
let id = 0;
const pending = new Map();
const errors = [];
socket.onmessage = event => {
  const data = JSON.parse(event.data);
  if (data.id) {
    const item = pending.get(data.id);
    pending.delete(data.id);
    if (data.error) item?.reject(Error(JSON.stringify(data.error)));
    else item?.resolve(data.result);
  }
  if (data.method === 'Runtime.exceptionThrown') errors.push(data.params.exceptionDetails.text);
};
function cdp(method, params = {}) {
  return new Promise((resolve,reject) => {
    const key = ++id;
    pending.set(key,{resolve,reject});
    socket.send(JSON.stringify({id:key,method,params}));
  });
}
async function evaluate(expression) {
  const r = await cdp('Runtime.evaluate',{expression,returnByValue:true,awaitPromise:true});
  if (r.exceptionDetails) throw Error(JSON.stringify(r.exceptionDetails));
  return r.result.value;
}
async function navigate(path,width,height=1000) {
  await cdp('Emulation.setDeviceMetricsOverride',{width,height,deviceScaleFactor:1,mobile:width<761});
  await cdp('Page.navigate',{url:base+path});
  for (let i=0;i<100;i++) {
    if (await evaluate("document.readyState === 'complete' && location.pathname === "+JSON.stringify(path.split('?')[0]))) break;
    await new Promise(r=>setTimeout(r,100));
  }
  await evaluate("Promise.race([document.fonts.ready, new Promise(r=>setTimeout(r,3000))]).then(()=>true)");
  await evaluate("new Promise(r=>requestAnimationFrame(()=>requestAnimationFrame(r)))");
}
async function screenshot(name) {
  const shot = await cdp('Page.captureScreenshot',{format:'png',captureBeyondViewport:false});
  fs.writeFileSync('.preview/'+name+'.png',Buffer.from(shot.data,'base64'));
}
async function checkPage(path,width,name) {
  await navigate(path,width);
  await evaluate("Promise.all([...document.images].map(i => { i.loading='eager'; return i.decode().catch(()=>null); }))");
  const result = await evaluate("({width:innerWidth,scrollWidth:document.documentElement.scrollWidth,h1:document.querySelectorAll('h1').length,brokenImages:[...document.images].filter(i=>!i.complete||i.naturalWidth===0).map(i=>i.src),untitledLinks:[...document.querySelectorAll('a:not([aria-hidden=true])')].filter(a=>!a.textContent.trim()&&!a.getAttribute('aria-label')).map(a=>a.outerHTML),direction:document.documentElement.dir})");
  assert.ok(result.scrollWidth <= result.width,'Horizontal overflow on '+path+' at '+width+' ('+result.scrollWidth+'px)');
  assert.equal(result.h1,1,'Expected one h1 on '+path);
  assert.deepEqual(result.brokenImages,[],'Broken images on '+path);
  assert.deepEqual(result.untitledLinks,[],'Unnamed links on '+path);
  console.log('PASS layout',path,width,result.direction);
  if(name) await screenshot(name);
}
try {
  await cdp('Page.enable');
  await cdp('Runtime.enable');
  await checkPage('/en/',1440,'home-desktop');
  await evaluate("document.querySelector('#work').scrollIntoView({behavior:'instant'})");
  await screenshot('work-desktop');
  await checkPage('/en/',390,'home-mobile');
  await checkPage('/en/',320);
  await evaluate("document.querySelector('.menu-toggle').click()");
  assert.equal(await evaluate("document.querySelector('.menu-toggle').getAttribute('aria-expanded')"),'true');
  assert.equal(await evaluate("getComputedStyle(document.querySelector('#main-nav')).display"),'flex');
  await cdp('Input.dispatchKeyEvent',{type:'keyDown',key:'Escape',code:'Escape',windowsVirtualKeyCode:27});
  assert.equal(await evaluate("document.querySelector('.menu-toggle').getAttribute('aria-expanded')"),'false');
  assert.equal(await evaluate("document.activeElement.className"),'menu-toggle');
  console.log('PASS mobile menu and Escape focus');
  await checkPage('/ar/',390,'home-arabic');
  await checkPage('/ar/',320);
  await checkPage('/en/portfolio',1440,'projects-desktop');
  await evaluate("document.querySelector('button[value=mobile]').click()");
  assert.equal(await evaluate("document.querySelectorAll('.project-slot:not([hidden])').length"),3);
  assert.equal(await evaluate("location.search"),'?category=mobile');
  await evaluate("document.querySelector('button[value=systems]').click()");
  assert.equal(await evaluate("document.querySelectorAll('.project-slot:not([hidden])').length"),3);
  await evaluate("history.back();new Promise(r=>setTimeout(r,300))");
  assert.equal(await evaluate("document.querySelector('button[aria-pressed=true]').value"),'mobile');
  await navigate('/en/portfolio?category=automation',390);
  assert.equal(await evaluate("document.querySelectorAll('.project-slot:not([hidden])').length"),3);
  await screenshot('projects-mobile');
  console.log('PASS filters, direct filter URL and browser history');
  await checkPage('/ar/portfolio',390);
  await checkPage('/en/portfolio/runners-erp',390,'case-study-mobile');
  await checkPage('/ar/portfolio/musaaid-quiz-platform',320);
  await checkPage('/en/contact',1440,'contact-desktop');
  await checkPage('/ar/contact',390,'contact-arabic');
  await checkPage('/en/contact',320);
  if (await evaluate("document.querySelector('.form-submit').textContent.includes('Prepare email draft')")) {
  await evaluate("document.querySelector('#field-name').value='Browser check';document.querySelector('#field-contact').value='reply@example.com';document.querySelector('#field-message').value='A local draft for checking the contact workflow.';document.querySelector('#contact-form').requestSubmit()");
  for(let i=0;i<60;i++) { await new Promise(r=>setTimeout(r,100)); if(await evaluate("!!document.querySelector('#form-result')")) break; }
  assert.ok(await evaluate("document.querySelector('#form-result a').getAttribute('href').startsWith('mailto:salahbakhash@gmail.com?')"));
  console.log('PASS contact email draft without sending a message');
  } else console.log('Configured delivery detected; skipped a real contact submission.');
  // The page remains usable without JavaScript, including server-side project filtering.
  await cdp('Emulation.setScriptExecutionDisabled',{value:true});
  await cdp('Page.navigate',{url:base+'/en/portfolio?category=mobile'});
  for(let i=0;i<100;i++){await new Promise(r=>setTimeout(r,50));if(await evaluate("document.readyState === 'complete' && !!document.querySelector('.project-filters')"))break;}
  assert.equal(await evaluate("document.querySelectorAll('.project-slot:not([hidden])').length"),3);
  await cdp('Emulation.setDeviceMetricsOverride',{width:390,height:1000,deviceScaleFactor:1,mobile:true});
  assert.equal(await evaluate("getComputedStyle(document.querySelector('#main-nav')).display"),'flex');
  console.log('PASS server filtering and mobile navigation without JavaScript');
  await cdp('Emulation.setScriptExecutionDisabled',{value:false});
  assert.deepEqual(errors,[],'Browser JavaScript exceptions');
  console.log('PASS browser QA; screenshots saved in .preview/');
} finally {
  socket.close();
  await fetch(endpoint+'/json/close/'+target.id);
}
