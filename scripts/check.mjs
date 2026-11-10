import assert from 'node:assert/strict';
import fs from 'node:fs';
import { createHash } from 'node:crypto';

const base = process.env.PORTFOLIO_URL || 'http://127.0.0.1:8000';
const source = fs.readFileSync(new URL('../includes/data.php',import.meta.url),'utf8');
const projects = JSON.parse(source.split("<<<'PROJECTS_JSON'\n")[1].split('\nPROJECTS_JSON')[0]);
const urls = new Set(['/']);
let assertions = 0;
async function get(path, expected=200) {
  const r = await fetch(base+path,{redirect:'manual'});
  assert.equal(r.status,expected,path); assertions++;
  return r;
}
for (const lang of ['en','ar']) {
  for (const path of ['', 'portfolio', 'contact', ...Object.keys(projects).map(p=>'portfolio/'+p)]) {
    const route='/'+lang+'/'+path;
    const r=await get(route);
    const html=await r.text();
    assert.ok(!/Fatal error|Warning:|Parse error/.test(html),route+' PHP diagnostics'); assertions++;
    assert.equal((html.match(/<h1\b/g)||[]).length,1,route+' heading'); assertions++;
    assert.ok(html.includes('lang="'+lang+'"'),route+' language'); assertions++;
    for(const m of html.matchAll(/(?:href|src)="(\/[^"]*)"/g)) {
      const url=new URL(m[1].replaceAll('&amp;','&'),base);
      if(url.pathname!==route || url.search) urls.add(url.pathname+url.search);
    }
  }
  for(const [path,anchor] of [['about','about'],['strength','expertise']]) {
    const r=await get('/'+lang+'/'+path,302);
    assert.equal(r.headers.get('location'),'/'+lang+'/#'+anchor); assertions++;
  }
  for(const path of ['missing','portfolio/not-a-project','contact/extra','portfolio/runners-erp/extra'])await get('/'+lang+'/'+path,404);
  for(const [category,count] of [['all',16],['mobile',3],['systems',3],['automation',3],['web',7]]) {
    const html=await (await get('/'+lang+'/portfolio?category='+category)).text();
    const shown=[...html.matchAll(/<div class="project-slot"(.*?)>/g)].filter(m=>!m[1].includes('hidden')).length;
    assert.equal(shown,count,category+' server filter'); assertions++;
  }
}
for(const path of urls)await get(path);

for (const lang of ['en', 'ar']) {
  const page = await (await get('/' + lang + '/')).text();
  const assets = ['/css/style.css', '/js/script.js', ...(lang === 'ar' ? ['/css/ar.css'] : [])];
  for (const asset of assets) {
    const local = fs.readFileSync(new URL('..' + asset, import.meta.url));
    const version = createHash('sha256').update(local).digest('hex').slice(0, 12);
    const url = asset + '?v=' + version;
    assert.ok(page.includes('"' + url + '"'), lang + ': asset URL must change with file contents');
    assertions++;
    const response = await get(url);
    assert.ok(response.headers.get('content-type').includes(asset.endsWith('.css') ? 'text/css' : 'javascript'), url + ' MIME type');
    assertions++;
    assert.deepEqual(Buffer.from(await response.arrayBuffer()), local, url + ' serves the current asset');
    assertions++;
  }
}

for(const path of ['/.env','/.git/config','/includes/data.php','/private/CONTENT_COVERAGE.md','/scripts/browser-check.mjs','/PORTFOLIO_BRIEF.md','/Salah_Bakhash_CV_Fixed.pdf','/my%20work/website_images.psd'])await get(path,403);
await get('/en/portfolio?category%5B%5D=mobile');
await get('/?url%5B%5D=en');
const pdf=await (await get('/media/salah-cv.pdf')).arrayBuffer();
const hash=b=>createHash('sha256').update(new Uint8Array(b)).digest('hex');
assert.equal(hash(pdf),hash(fs.readFileSync(new URL('../Salah_Bakhash_CV_Fixed.pdf',import.meta.url))),'Public CV matches latest supplied CV'); assertions++;
let r=await fetch(base+'/en/contact');
const html=await r.text();
const cookie=r.headers.get('set-cookie').split(';')[0];
const csrf=html.match(/name="csrf" value="([^"]+)"/)[1];
async function post(data, expected) {
  const r=await fetch(base+'/en/contact',{method:'POST',headers:{'content-type':'application/x-www-form-urlencoded',cookie},body:new URLSearchParams(data),redirect:'manual'});
  assert.equal(r.status,expected,'Contact response');assertions++;
  return r.text();
}
const values={csrf,name:'Local verification',contact:'reply@example.com',message:'A project enquiry used only to check the local preview.'};
await post({...values,csrf:'invalid'},419);
const invalid=await post({csrf,name:'',contact:'invalid',message:'short'},422);
assert.ok(invalid.includes('aria-invalid="true"'));assertions++;
await post({...values,website:'spam'},422);
if(html.includes('Prepare email draft')) {
  const draft=await post(values,200);
  assert.ok(draft.includes('mailto:salahbakhash@gmail.com?subject='));assertions++;
  assert.ok(draft.includes('Your email draft is ready'));assertions++;
  const escaped=await post({...values,name:'<script>alert(1)</script>'},200);
  assert.ok(!escaped.includes('<script>alert(1)</script>'));assertions++;
  assert.ok(escaped.includes('&lt;script&gt;alert(1)&lt;/script&gt;'));assertions++;
} else console.log('Configured delivery detected; skipped valid submission to avoid sending a real message.');
console.log('PASS '+assertions+' route, content, asset, privacy, CV and contact checks.');
