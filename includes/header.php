<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?= e(site_url()) ?>" aria-label="<?= e(t('Salah Bakhash — home', 'صلاح بخاش — الرئيسية')) ?>"><span class="brand-mark" aria-hidden="true">s<span>.</span></span><span class="brand-name"><?= e(t('salah bakhash', 'صلاح بخاش')) ?><span><?= e(t('FULL-STACK DEVELOPER', 'مطور برمجيات متكامل')) ?></span></span></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav"><span class="menu-icon" aria-hidden="true"></span><span><?= e(t('Menu', 'القائمة')) ?></span></button>
    <nav id="main-nav" class="main-nav" aria-label="<?= e(t('Main navigation', 'القائمة الرئيسية')) ?>">
      <a href="<?= e(site_url('portfolio')) ?>" <?= $_page === 'portfolio' && !$notFound ? 'aria-current="page"' : '' ?>><?= e(t('Work', 'أعمالي')) ?></a>
      <a href="<?= e(site_url('#expertise')) ?>"><?= e(t('Expertise', 'خبراتي')) ?></a>
      <a href="<?= e(site_url('#about')) ?>"><?= e(t('About', 'من أنا')) ?></a>
      <?php $otherLang = $_lang === 'en' ? 'ar' : 'en'; $switchPath = $notFound ? '' : ($_page === 'home' ? '' : $_page . ($slug ? '/' . $slug : '')); ?>
      <a class="language-link" href="/<?= $otherLang ?>/<?= e($switchPath) ?>" hreflang="<?= $otherLang ?>" lang="<?= $otherLang ?>" dir="auto"><?= $_lang === 'en' ? 'العربية' : 'English' ?></a>
      <a class="nav-contact" href="<?= e(site_url('contact')) ?>" <?= $_page === 'contact' && !$notFound ? 'aria-current="page"' : '' ?>><?= e(t('Let’s talk', 'لنتحدث')) ?> <?= external_arrow() ?></a>
    </nav>
  </div>
</header>
