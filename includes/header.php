<header id="header" class="header">
  <div class="header-inner">
    <div class="logo"><span>S</span>alah</div>
    <nav id="navigation" class="navbar" aria-label="<?= $_lang === 'ar' ? 'التنقل الرئيسي' : 'Main navigation' ?>">
      <ul class="links">
        <?php foreach (['home' => 'home', 'about' => 'user', 'portfolio' => 'briefcase', 'contact' => 'comments'] as $page => $icon) : ?>
          <li>
            <a href="/<?= $_lang ?>/<?= $page ?>" data-page="<?= $page ?>"<?= $_page === $page ? ($isProjectRoute ? ' class="active" aria-current="location"' : ' class="active" aria-current="page"') : '' ?>>
              <i class="fa fa-<?= $icon ?>" aria-hidden="true"></i> <?= __($page) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <button type="button" id="navToggler" class="nav-toggler icon-button" aria-controls="navigation" aria-expanded="false" aria-label="<?= $_lang === 'ar' ? 'القائمة' : 'Menu' ?>">
      <i class="fas fa-bars" aria-hidden="true"></i>
    </button>
    <button type="button" id="mode-toggle" class="day-night icon-button" aria-pressed="false" aria-label="<?= $_lang === 'ar' ? 'الوضع الفاتح' : 'Light mode' ?>">
      <i class="fas fa-sun" aria-hidden="true"></i>
    </button>
  </div>
</header>
