<main id="pagesContainer" class="content-page wide">

  <section id="home" class="page home <?= $_page == "home" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="info padd">
          <h3 class="title hello"><?= $_LANG["HOME_TITLE_1"]; ?> <span class="special name"><?= $_LANG["HOME_SUBTITLE_1"]; ?></span></h3>
          <h3 class="title profession"><?= $_LANG["HOME_TITLE_2"]; ?> <span class="special job"><?= $_LANG["HOME_SUBTITLE_2"]; ?></span></h3>
          <p class="text">
            <?= $_LANG["HOME_INFO_1"]; ?>
          </p>
          <a class="btn hire-me targeted-link" data-page="contact" href="#contact"><?= $_LANG["HOME_CALL_ME"]; ?></a>
        </div>
        <div class="personal-img padd">
          <div class="img-holder">
            <img src="/images/home-image2.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="page about <?= $_page == "about" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="page-title padd">
          <h2><?= $_LANG["ABOUT_MAIN_TITLE"]; ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="content padd">
          <div class="row">
            <div class="text padd">
              <h3><?= $_LANG["ABOUT_TITLE_1"]; ?> <span><?= $_LANG["ABOUT_SUBTITLE_1"]; ?></span></h3>
              <p>
                <?= $_LANG["ABOUT_INFO_1"]; ?>
              </p>
            </div>
          </div>
          <div class="row info-container">
            <div class="info block padd">
              <div class="row">
                <div class="item padd">
                  <p><?= $_LANG["ABOUT_PROJECT_COUNT"]; ?> : <span>15</span></p>
                </div>
                <div class="item padd">
                  <p><?= $_LANG["ABOUT_JOB_TITLE"]; ?> : <span>Full-Stack Developer</span></p>
                </div>
                <div class="item padd">
                  <p><?= $_LANG["ABOUT_EMAIL"]; ?> : <span style="text-transform: none;">salahbakhash@gmail.com</span></p>
                </div>
                <div class="item padd">
                  <p><?= $_LANG["ABOUT_PHONE"]; ?> : <a href="tel:+905527188570">+905527188570</a></p>
                </div>
                <div class="item padd">
                  <p><?= $_LANG["ABOUT_COUNTRY"]; ?> : <span><?= $_LANG["ABOUT_TURKEY"]; ?></span></p>
                </div>
                <div class="item padd">
                  <p><?= $_LANG["ABOUT_FREELANCE"]; ?> : <span><?= $_LANG["ABOUT_AVAILABLE"]; ?></span></p>
                </div>
              </div>
              <div class="row">
                <div class="btns padd">
                  <a href="./media/my-cv.pdf" download="salah-CV.pdf" class="btn"><?= $_LANG["ABOUT_DOWNLOAD_CV"]; ?></a>
                  <a href="#contact" data-page="contact" class="targeted-link btn"><?= $_LANG["ABOUT_HIRE_ME"]; ?></a>
                </div>
              </div>
            </div>
          </div>
          <div class="skills-section block padd">
            <div class="row">
              <div class="col skills">
                <h4 class="title">Working Stacks</h4>
                <div class="row">
                  <div class="col">
                    <h6 class="sub-title">LAMP stack:</h6>
                    <div class="techs">
                      <img class="tech" src="/images/techs/laravel.png" alt="laravel">
                      <img class="tech" style="width: 65px;" src="/images/techs/php.png" alt="apache">
                      <img class="tech" style="width: 75px;" src="/images/techs/mysql.png" alt="mysql">
                    </div>
                  </div>
                  <div class="col">
                    <h6 class="sub-title">FERN stack:</h6>
                    <div class="techs">
                      <img class="tech" src="/images/techs/firebase.png" alt="firebase">
                      <img class="tech" src="/images/techs/react.png" alt="react">
                      <img class="tech" style="width: auto;" src="/images/techs/nodejs.png" alt="nodejs">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col knowledge">
                <h4 class="title">Technical Skills</h4>
                <div class="list">
                  <div class="item">Laravel</div>
                  <div class="item">PHP</div>
                  <div class="item">MySql</div>
                  <div class="item">jQuery</div>
                  <div class="item">React</div>
                  <div class="item">NextJs</div>
                  <div class="item">Svelte Kit</div>
                  <div class="item">React-Native</div>
                  <div class="item">GitHub</div>
                  <div class="item">Python</div>
                  <div class="item">Vercal</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row history">
            <div class="education padd">
              <h3 class="title"><?= $_LANG["ABOUT_TITLE_1"]; ?></h3>
              <div class="row">
                <div class="box padd">
                  <div class="timeline shadow">
                    <!-- ===== item ===== -->
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2023 - Present
                      </h3>
                      <h4 class="title"><?= $_LANG["ABOUT_SECTION_3_TITLE"]; ?></h4>
                      <div class="text">
                        <?= $_LANG["ABOUT_SECTION_3_INFO"]; ?>
                      </div>
                    </div>
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2022 - 2023
                      </h3>
                      <h4 class="title"><?= $_LANG["ABOUT_SECTION_2_TITLE"]; ?></h4>
                      <div class="text">
                        <?= $_LANG["ABOUT_SECTION_2_INFO"]; ?>
                      </div>
                    </div>
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2019 - Present
                      </h3>
                      <h4 class="title"><?= $_LANG["ABOUT_SECTION_1_TITLE"]; ?></h4>
                      <p class="text">
                        <?= $_LANG["ABOUT_SECTION_1_INFO"]; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="experience padd">
              <h3 class="title"><?= $_LANG["ABOUT_TITLE_2"]; ?></h3>
              <div class="row">
                <div class="box padd">
                  <div class="timeline shadow">
                    <!-- ===== item ===== -->
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2021 - 2023
                      </h3>
                      <h4 class="title"><?= $_LANG["ABOUT_TITLE_2_1_TITLE"]; ?></h4>
                      <p class="text">
                        <?= $_LANG["ABOUT_TITLE_2_1_INFO"]; ?>
                      </p>
                    </div>
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2022 - 12 - 1
                      </h3>
                      <h4 class="title"><?= $_LANG["ABOUT_TITLE_2_2_TITLE"]; ?></h4>
                      <p class="text">
                        <?= $_LANG["ABOUT_TITLE_2_2_INFO"]; ?>
                      </p>
                    </div>
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2023 - 2 - 2
                      </h3>
                      <h4 class="title"><?= $_LANG["ABOUT_TITLE_2_3_TITLE"]; ?></h4>
                      <p class="text">
                        <?= $_LANG["ABOUT_TITLE_2_3_INFO"]; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="advantages" class="page advantages <?= $_page == "strength" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="page-title padd">
          <h2><?= $_LANG["ADVANTAGE_MAIN_TITLE"]; ?></h2>
        </div>
      </div>
      <div class="row services-container">
        <div class="service padd">
          <div class="item">
            <div class="icon">
              <i class="fa fa-palette"></i>
            </div>
            <h4 class="title"><?= $_LANG["ADVANTAGE_1_TITLE"]; ?></h4>
            <p class="text"><?= $_LANG["ADVANTAGE_1_INFO"]; ?></p>
          </div>
        </div>
        <div class="service padd">
          <div class="item">
            <div class="icon">
              <i class="fa fa-laptop-code"></i>
            </div>
            <h4 class="title"><?= $_LANG["ADVANTAGE_2_TITLE"]; ?></h4>
            <p class="text">
              <?= $_LANG["ADVANTAGE_2_INFO"]; ?>
            </p>
          </div>
        </div>
        <div class="service padd">
          <div class="item">
            <div class="icon">
              <i class="fa fa-mobile-alt"></i>
            </div>
            <h4 class="title"><?= $_LANG["ADVANTAGE_3_TITLE"]; ?></h4>
            <p class="text">
              <?= $_LANG["ADVANTAGE_3_INFO"]; ?>
            </p>
          </div>
        </div>
        <div class="service padd">
          <div class="item">
            <div class="icon">
              <i class="fa fa-code"></i>
            </div>
            <h4 class="title"><?= $_LANG["ADVANTAGE_4_TITLE"]; ?></h4>
            <p class="text">
              <?= $_LANG["ADVANTAGE_4_INFO"]; ?>
            </p>
          </div>
        </div>
        <div class="service padd">
          <div class="item">
            <div class="icon">
              <i class="fas fa-tachometer-alt"></i>
            </div>
            <h4 class="title"><?= $_LANG["ADVANTAGE_5_TITLE"]; ?></h4>
            <p class="text"><?= $_LANG["ADVANTAGE_5_INFO"]; ?></p>
          </div>
        </div>
        <div class="service padd">
          <div class="item">
            <div class="icon">
              <i class="fas fa-hands-helping"></i>
            </div>
            <h4 class="title"><?= $_LANG["ADVANTAGE_6_TITLE"]; ?></h4>
            <p class="text">
              <?= $_LANG["ADVANTAGE_6_INFO"]; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="page portfolio <?= $_page == "portfolio" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="page-title padd">
          <h2><?= $_LANG["PORTFOLIO_MAIN_TITLE"]; ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="heading padd">
          <h2 class="title"><?= $_LANG["PORTFOLIO_MY_BEST_PROJECTS"]; ?> :</h2>
        </div>
      </div>
      <div class="row">
        <div class="item padd">
          <div class="inner shadow">
            <div class="img">
              <img src="/images/portfolio-1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="item padd">
          <div class="inner shadow">
            <div class="img">
              <img src="/images/portfolio-2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="item padd">
          <div class="inner shadow">
            <div class="img">
              <img src="/images/portfolio-3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="item padd">
          <div class="inner shadow">
            <div class="img">
              <img src="/images/portfolio-4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="item padd">
          <div class="inner shadow">
            <div class="img">
              <img src="/images/portfolio-5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="item padd">
          <div class="inner shadow">
            <div class="img">
              <img src="/images/portfolio-6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="page contact <?= $_page == "contact" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="page-title padd">
          <h2><?= $_LANG["CONTACT_MAIN_TITLE"]; ?></h2>
        </div>
      </div>
      <h3 class="title padd"><?= $_LANG["CONTACT_1_TITLE"]; ?></h3>
      <h4 class="sub-title padd"><?= $_LANG["CONTACT_1_SUBTITLE"]; ?></h4>
      <div class="row contacts-container">
        <div class="info-item padd">
          <div class="icon"><i class="fa fa-phone"></i></div>
          <h4 class="title"><?= $_LANG["CONTACT_CALL_ME"]; ?></h4>
          <a href="tel:+905527188570" class="value link">+90 552 718 85 70</a>
        </div>
        <div class="info-item padd">
          <div class="icon"><i class="fab fa-whatsapp"></i></div>
          <h4 class="title"><?= $_LANG["CONTACT_WHATSAPP"]; ?></h4>
          <a href="https://api.whatsapp.com/send?phone=905527188570" class="value link"><?= $_LANG["CONTACT_WHATSAPP_INFO"]; ?></a>
        </div>
        <div class="info-item padd">
          <div class="icon"><i class="fa fa-envelope"></i></div>
          <h4 class="title"><?= $_LANG["CONTACT_EMAIL"]; ?></h4>
          <a href="mailto:salahbakhash@gmail.com?subject=from%20personal%20website" class="value link">salahbakhash@gmail.com</a>
        </div>
        <div class="info-item padd">
          <div class="icon"><i class="fa fa-globe-europe"></i></div>
          <h4 class="title"><?= $_LANG["CONTACT_WEBSITE"]; ?></h4>
          <a href="https:/bakhash.com" class="value link">salahbakhash.com</a>
        </div>
      </div>
      <h3 class="title padd"><?= $_LANG["CONTACT_SEND_EMAIL"]; ?></h3>
      <h4 class="sub-title padd"><?= $_LANG["CONTACT_EMAIL_INFO"]; ?></h4>
      <div class="row">
        <form class="form padd" method="post" id="contact-form">
          <div class="row">
            <div class="form-item col-6 padd">
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="<?= $_LANG["CONTACT_NAME_HOLDER"]; ?>">
              </div>
            </div>
            <div class="form-item col-6 padd">
              <div class="form-group">
                <input name="contact" type="text" class="form-control" placeholder="<?= $_LANG["CONTACT_EMAIL_HOLDER"]; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-item col-12 padd">
              <div class="form-group">
                <textarea name="message" class="form-control" placeholder="<?= $_LANG["CONTACT_MSG_HOLDER"]; ?>"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-item col-12 padd">
              <div class="form-group">
                <button type="submit" class="btn"><?= $_LANG["CONTACT_SENR_MSG"]; ?></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <div class="style-swich" id="color-switch">
    <div class="toggler s-icon" onclick="toggleActive('color-switch')">
      <i class="fas fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon" onclick="toggleMood('mood-toggler')">
      <i class="fas fa-sun" id="mood-toggler"></i>
    </div>
    <h4><?= $_LANG["CONTROL_THEME_COLORS"]; ?></h4>
    <div class="colors">
      <span class="color color-1" onclick="setThemeColor(1)"></span>
      <span class="color color-2" onclick="setThemeColor(2)"></span>
      <!-- <span class="color color-3" onclick="setThemeColor(3)"></span> -->
      <span class="color color-4" onclick="setThemeColor(4)"></span>
      <!-- <span class="color color-5" onclick="setThemeColor(5)"></span> -->
    </div>
  </div>

</main>