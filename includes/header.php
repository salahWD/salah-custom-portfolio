<header id="header" class="header">
  <div class="logo">
    <!-- <img src="images/logo.png" alt="salah_bakhash logo"> -->
    <span>S</span>alah
  </div>
  <div id="navToggler" class="nav-toggler d-none">
    <span></span>
  </div>
  <nav class="navbar">
    <ul class="links">
      <li><a data-page="home" class="targeted-link home-link <?= $_page == "home" ? "active" : ""; ?>"><i class="fa fa-home"></i> <?= __("home"); ?></a></li>
      <li><a data-page="about" class="targeted-link about-link <?= $_page == "about" ? "active" : ""; ?>"><i class="fa fa-user"></i> <?= __("about"); ?></a></li>
      <!-- <li><a data-page="advantages" class="targeted-link advantages-link <?= $_page == "strength" ? "active" : ""; ?>"><i class="fa fa-list"></i> <?= __("strength"); ?></a></li> -->
      <li><a data-page="portfolio" class="targeted-link portfolio-link <?= $_page == "portfolio" ? "active" : ""; ?>"><i class="fa fa-briefcase"></i> <?= __("portfolio"); ?></a></li>
      <li><a data-page="contact" class="targeted-link contact-link <?= $_page == "contact" ? "active" : ""; ?>"><i class="fa fa-comments"></i> <?= __("contact"); ?></a></li>
    </ul>
  </nav>
</header>