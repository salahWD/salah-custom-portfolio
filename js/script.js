(() => {
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('#main-nav');
  const closeMenu = (restoreFocus = false) => {
    if (!toggle || !nav) return;
    toggle.setAttribute('aria-expanded', 'false');
    nav.classList.remove('is-open');
    if (restoreFocus) toggle.focus();
  };
  toggle?.addEventListener('click', () => {
    const open = toggle.getAttribute('aria-expanded') !== 'true';
    toggle.setAttribute('aria-expanded', String(open));
    nav.classList.toggle('is-open', open);
  });
  nav?.addEventListener('click', event => { if (event.target.closest('a')) closeMenu(); });
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && toggle?.getAttribute('aria-expanded') === 'true') closeMenu(true);
  });
  document.addEventListener('click', event => {
    if (!event.target.closest('.site-header')) closeMenu();
  });
  document.addEventListener('focusin', event => {
    if (!event.target.closest('.site-header')) closeMenu();
  });
  window.matchMedia('(min-width: 761px)').addEventListener('change', event => {
    if (event.matches) closeMenu();
  });

  const filters = document.querySelector('.project-filters');
  if (filters) {
    const buttons = [...filters.querySelectorAll('button')];
    const slots = [...document.querySelectorAll('.project-slot')];
    const status = document.querySelector('#filter-status');
    const applyFilter = value => {
      const valid = buttons.some(button => button.value === value);
      const category = valid ? value : 'all';
      let count = 0;
      buttons.forEach(button => button.setAttribute('aria-pressed', String(button.value === category)));
      slots.forEach(slot => {
        const show = category === 'all' || slot.querySelector('[data-category]').dataset.category === category;
        slot.hidden = !show;
        if (show) count++;
      });
      status.textContent = count + (document.documentElement.lang === 'ar' ? ' مشروع معروض' : ' projects shown');
    };
    filters.addEventListener('submit', event => {
      if (!event.submitter) return;
      event.preventDefault();
      const category = event.submitter.value;
      applyFilter(category);
      const url = new URL(window.location.href);
      if (category === 'all') url.searchParams.delete('category');
      else url.searchParams.set('category', category);
      history.pushState({}, '', url);
    });
    window.addEventListener('popstate', () => applyFilter(new URL(window.location.href).searchParams.get('category')));
  }
  const notice = document.querySelector('.error-notice, #form-result');
  if (notice) notice.focus({ preventScroll: true });
})();
