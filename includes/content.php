<main id="pagesContainer" class="content-page">

  <section id="home" class="page home <?= $_page == "home" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="info padd">
          <p class="hello"><?= __("Hello, my name is"); ?></p>
          <h1 class="name"><?= __("Salah Bakhash"); ?></h1>
          <h3 class="title profession"><?= __("i am a"); ?> <span class="special job"><?= __("Web Developer"); ?></span></h3>
          <p class="text">
            <?= __("I am a web developer with over 4 years of extensive experience. I have created a lot of personal websites, web stores, landing pages, and much more."); ?>
          </p>
          <a class="btn hire-me" href="/<?= $_lang ?>/contact"><?= __("Call Me"); ?></a>
        </div>
        <div class="personal-img padd">
          <div class="img-holder">
            <img src="/images/home-image2.jpg" alt="<?= __("Salah Bakhash") ?>">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="page about <?= $_page == "about" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="page-title padd">
          <h1><?= __("About Me") ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="content padd">
          <div class="row">
            <div class="text padd">
              <h3><?= __("I'm Salah Bakhash and I'm a") ?> <span><?= __("Web Developer") ?></span></h3>
              <p>
                <?= __("I used to freelance as a video editor and graphic designer, Then I learned web development and started creating content as a web developer") ?>
              </p>
            </div>
          </div>
          <div class="row info-container">
            <div class="info block">
              <div class="row">
                <div class="item padd">
                  <p><?= __("projects count") ?> : <span>15</span></p>
                </div>
                <div class="item padd">
                  <p><?= __("job title") ?> : <span>Full-Stack Developer</span></p>
                </div>
                <div class="item padd">
                  <p><?= __("email") ?> : <a href="mailto:salahbakhash@gmail.com" style="text-transform: none;">salahbakhash@gmail.com</a></p>
                  <!-- <p><?= __("email") ?> : <a href="mailto:contact@salahbakhash.com" style="text-transform: none;">contact@salahbakhash.com</a></p> -->
                </div>
                <div class="item padd">
                  <p><?= __("phone") ?> : <a href="tel:+905527188570">+905527188570</a></p>
                </div>
                <div class="item padd">
                  <p><?= __("country") ?> : <span><?= __("Turkey") ?></span></p>
                </div>
                <div class="item padd">
                  <p><?= __("freelance") ?> : <span><?= __("Available") ?></span></p>
                </div>
              </div>
              <div class="row">
                <div class="btns padd">
                  <a href="/media/salah-cv.pdf" download="salah-cv.pdf" class="btn"><?= __("download cv") ?></a>
                  <a href="/<?= $_lang ?>/contact" class="btn"><?= __("hire me") ?></a>
                </div>
              </div>
            </div>
            <div class="skills-section block padd">
              <div class="row">
                <div class="col skills">
                  <h4 class="title"><?= __("Working Stacks") ?></h4>
                  <div class="row" dir="ltr">
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
                  <h4 class="title"><?= __("Technical Skills") ?></h4>
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
          </div>
          <div class="row history">
            <div class="education padd">
              <h3 class="title"><?= __("experience") ?></h3>
              <div class="row">
                <div class="box padd">
                  <div class="timeline shadow">
                    <!-- ===== item ===== -->
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2023 - <?= __("Present") ?>
                      </h3>
                      <h4 class="title"><?= __("Full-Stack Web Developer At HashNet") ?></h4>
                      <div class="text">
                        <ul>
                          <li><?= __("Developed a custom CMS using (Pure PHP, MySQL) with a folder-based blocks for articles, portfolios, testimonials, authentication, and categories to develop websites faster") ?></li><br />
                          <li><?= __("Created and maintained over 11 WordPress websites, including backups and data entry") ?></li><br />
                          <li><?= __("Provided ongoing maintenance and technical support for web projects") ?></li><br />
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2022 - 2023
                      </h3>
                      <h4 class="title"><?= __("Software Developer At DXN Taksim") ?></h4>
                      <div class="text">
                        <ul>
                          <li>
                            <?= __("Developed various tools to automate manual processes, including a points calculation tool for billing, improving efficiency and accuracy.") ?>
                          </li>
                          <br />
                          <li>
                            <?= __("Developed a new accounting system, converting the paper system into a digital accounting system that calculates on a daily basis.") ?>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="circle"></div>
                      <h3 class="date">
                        <i class="fa fa-calendar"></i> 2019 - <?= __("Present") ?>
                      </h3>
                      <h4 class="title"><?= __("Freelancing") ?></h4>
                      <p class="text">
                        <?= __("Completed over 21 web development projects, including more than 13 paid freelance projects with a very good clients testimonials, some of it can be seen at <a href='https://mostaql.com/u/salah_bakhash/reviews'>Mostaql platform</a>.") ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="experience padd">
              <h3 class="title"><?= __("projects") ?></h3>
              <div class="row">
                <div class="box padd">
                  <div class="timeline shadow">
                    <div class="item no-border">
                      <h4 class="title"><?= __("wide range of experience") ?></h4>
                      <p class="text">
                        <?= str_replace("##lang##", $_lang, __("I have completed a wide range of projects, from web development to custom software solutions using different technologies,</br> and I'm proud to showcase them</br> on my <a href='/##lang##/portfolio'>portfolio page</a>.</br></br> Each project is demonstrating my ability to deliver solutions for various needs.</br></br>You can explore detailed descriptions, features, and the technologies of my projects there.")) ?>
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

  <section id="portfolio" class="page portfolio <?= $_page == "portfolio" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="page-title padd">
          <h1><?= __("Portfolio") ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="heading padd">
          <h2 class="title"><?= __("My Best Projects") ?> :</h2>
        </div>
      </div>
      <?php
      $projects = require __DIR__ . '/projects.php';
      $isArabic = $_lang === 'ar';
      ?>
      <div class="project-grid">
        <?php foreach ($projects as $index => $project) :
          $number = $index + 1;
          $detail = $project[$_lang];
          $title = htmlspecialchars($detail['title'], ENT_QUOTES, 'UTF-8');
        ?>
          <button type="button" class="inner project-card" aria-haspopup="dialog" aria-controls="project-<?= $number ?>">
            <span class="img"><img src="/images/portfolio-<?= $number ?>.jpg" alt="" width="500" height="360"></span>
            <span class="project-card-title"><?= $title ?></span>
          </button>
        <?php endforeach; ?>
      </div>

      <?php foreach ($projects as $index => $project) :
        $number = $index + 1;
        $detail = $project[$_lang];
      ?>
        <dialog class="project-dialog" id="project-<?= $number ?>" aria-labelledby="project-title-<?= $number ?>">
          <div class="project-dialog-heading">
            <div>
              <p class="project-demo"><?= $isArabic ? 'تفاصيل تجريبية' : 'Demo details' ?></p>
              <h2 id="project-title-<?= $number ?>"><?= htmlspecialchars($detail['title'], ENT_QUOTES, 'UTF-8') ?></h2>
            </div>
            <form method="dialog">
              <button type="submit" class="icon-button" aria-label="<?= $isArabic ? 'إغلاق التفاصيل' : 'Close details' ?>" autofocus>×</button>
            </form>
          </div>
          <img class="project-preview" src="/images/portfolio-<?= $number ?>.jpg" alt="" width="500" height="360" loading="lazy">
          <div class="project-detail">
            <h3><?= $isArabic ? 'وصف المشروع' : 'Project description' ?></h3>
            <p><?= htmlspecialchars($detail['description'], ENT_QUOTES, 'UTF-8') ?></p>
          </div>
          <div class="project-detail">
            <h3><?= $isArabic ? 'التقنيات المستخدمة' : 'Tech stack' ?></h3>
            <ul class="project-stack">
              <?php foreach ($project['stack'] as $technology) : ?>
                <li dir="ltr"><?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="project-detail project-review">
            <h3><?= $isArabic ? 'مثال على رأي عميل' : 'Sample client review' ?></h3>
            <blockquote><?= htmlspecialchars($detail['review'], ENT_QUOTES, 'UTF-8') ?></blockquote>
          </div>
        </dialog>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="contact" class="page contact <?= $_page == "contact" ? "active" : ""; ?>">
    <div class="container">
      <div class="row">
        <div class="page-title padd">
          <h1><?= __("Contact Me") ?></h1>
        </div>
      </div>
      <h3 class="title padd"><?= __("do you have any questions ?") ?></h3>
      <h4 class="sub-title padd"><?= __("i am here for you") ?></h4>
      <div class="row contacts-container">
        <div class="info-item padd">
          <div class="icon"><i class="fa fa-phone"></i></div>
          <h4 class="title"><?= __("Call Me") ?></h4>
          <a href="tel:+905527188570" class="value link">+90 552 718 85 70</a>
        </div>
        <div class="info-item padd">
          <div class="icon"><i class="fab fa-whatsapp"></i></div>
          <h4 class="title"><?= __("Whatsapp") ?></h4>
          <a href="https://api.whatsapp.com/send?phone=905527188570" class="value link"><?= __("message me") ?></a>
        </div>
        <div class="info-item padd">
          <div class="icon"><i class="fa fa-envelope"></i></div>
          <h4 class="title"><?= __("Email") ?></h4>
          <a href="mailto:salahbakhash@gmail.com?subject=from%20personal%20website" class="value link">salahbakhash@gmail.com</a>
        </div>
        <div class="info-item padd">
          <div class="icon"><i class="fa fa-globe-europe"></i></div>
          <h4 class="title"><?= __("Website") ?></h4>
          <a href="/" class="value link">salahbakhash.com</a>
        </div>
      </div>
      <h3 class="title padd"><?= __("send me a message") ?></h3>
      <h4 class="sub-title padd"><?= __("I'm very responsive to my messages, make sure to leave your email or phone number to contact you back") ?></h4>
      <div class="row">
        <form class="form padd" method="post" id="contact-form">
          <div class="row">
            <div class="form-item col-6 padd">
              <div class="form-group">
                <input name="name" type="text" class="form-control" aria-label="<?= __("Name") ?>" placeholder="<?= __("Name") ?>">
              </div>
            </div>
            <div class="form-item col-6 padd">
              <div class="form-group">
                <input name="contact" type="text" class="form-control" aria-label="<?= __("Email Or Phone Number") ?>" placeholder="<?= __("Email Or Phone Number") ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-item col-12 padd">
              <div class="form-group">
                <textarea name="message" class="form-control" aria-label="<?= __("Message") ?>" placeholder="<?= __("Message") ?>"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-item col-12 padd">
              <div class="form-group">
                <button type="submit" class="btn"><?= __("Send Message") ?></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

</main>