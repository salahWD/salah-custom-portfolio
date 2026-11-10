<main id="main">
  <section class="hero container" id="home" aria-labelledby="hero-title">
    <div class="hero-copy">
      <p class="eyebrow"><span class="tiny-star" aria-hidden="true">✳</span> <?= e(t('THOUGHTFUL CODE. PRACTICAL SOLUTIONS.', 'برمجيات مدروسة. حلول عملية.')) ?></p>
      <h1 id="hero-title"><?= t('I build things<br>that make<br><em>work better.</em>', 'أبني حلولاً<br>تجعل العمل<br><em>أفضل.</em>') ?></h1>
      <p class="hero-description"><?= e(t('Websites, mobile apps, and business systems. I help businesses turn everyday challenges into software that works for them.', 'مواقع وتطبيقات جوال وأنظمة أعمال. أساعد الشركات على تحويل تحدياتها اليومية إلى برمجيات تخدم احتياجاتها.')) ?></p>
      <div class="hero-actions"><a class="button" href="#work"><?= e(t('Explore my work', 'استعرض أعمالي')) ?> <?= arrow() ?></a><a class="text-link" href="<?= e(site_url('contact')) ?>"><?= e(t('Have a project in mind?', 'لديك فكرة مشروع؟')) ?> <?= external_arrow() ?></a></div>
      <div class="hero-location"><span class="location-dot" aria-hidden="true"></span><?= e(t('Working across Lebanon, Türkiye & the Gulf', 'خبرة مع عملاء في لبنان وتركيا والخليج')) ?></div>
    </div>
    <div class="hero-portrait">
      <div class="portrait-grid" aria-hidden="true"></div>
      <span class="portrait-note" aria-hidden="true"><?= t('A person behind<br>every line of code.', 'وراء كل سطر برمجي،<br>إنسان يهتم بالتفاصيل.') ?></span>
      <div class="portrait-frame"><img src="/images/home-image2.jpg" width="1009" height="1231" alt="<?= e(t('Salah Bakhash by the waterfront', 'صلاح بخاش بجانب البحر')) ?>" fetchpriority="high"></div>
      <div class="portrait-label"><span><?= e(t('Hello, I’m Salah', 'مرحباً، أنا صلاح')) ?><strong><?= e(t('Your idea. My next build.', 'فكرتك. مشروعي القادم.')) ?></strong></span><span class="label-star" aria-hidden="true">✳</span></div>
      <span class="portrait-code" aria-hidden="true">&lt;built with care /&gt;</span>
    </div>
  </section>

  <div class="capability-band"><div class="container capability-inner"><span><?= e(t('WEB DEVELOPMENT', 'تطوير الويب')) ?></span><i aria-hidden="true">✳</i><span><?= e(t('MOBILE APPS', 'تطبيقات الجوال')) ?></span><i aria-hidden="true">✳</i><span><?= e(t('BUSINESS SYSTEMS', 'أنظمة الأعمال')) ?></span><i aria-hidden="true">✳</i><span><?= e(t('AUTOMATION', 'الأتمتة')) ?></span></div></div>

  <span id="portfolio" class="anchor-alias" aria-hidden="true"></span>
  <section class="section container" id="work" aria-labelledby="work-title">
    <div class="section-heading"><div><p class="eyebrow"><?= e(t('01 / SELECTED WORK', '01 / أعمال مختارة')) ?></p><h2 id="work-title"><?= t('Different challenges.<br><span class="muted">Purpose-built solutions.</span>', 'تحديات مختلفة.<br><span class="muted">حلول مصممة لها.</span>') ?></h2></div><a class="text-link" href="<?= e(site_url('portfolio')) ?>"><?= e(t('View all projects', 'جميع المشاريع')) ?> <?= arrow() ?></a></div>
    <div class="project-grid featured-grid"><?php foreach ($featured as $key) project_card($key, $projects[$key], true); ?></div>
    <p class="visual-note"><?= e(t('Project graphics illustrate the work; they are not product screenshots.', 'رسومات المشاريع توضيحية، وليست لقطات شاشة للمنتجات.')) ?></p>
  </section>

  <section class="expertise-section section" id="expertise" aria-labelledby="expertise-title">
    <div class="container expertise-layout">
      <div class="expertise-intro"><p class="eyebrow"><?= e(t('02 / WHAT I DO', '02 / ما أقدمه')) ?></p><h2 id="expertise-title"><?= t('From the first<br>“what if” to<br><em>up and running.</em>', 'من الفكرة الأولى<br>إلى برمجيات<br><em>تعمل فعلاً.</em>') ?></h2><p><?= e(t('I work across the full product: the interface people use, the systems behind it, and the integrations that bring it together.', 'أعمل على المنتج كاملاً: الواجهات التي يستخدمها الناس، والأنظمة التي تدعمها، والتكاملات التي تربطها.')) ?></p><a class="text-link" href="<?= e(site_url('contact')) ?>"><?= e(t('Let’s find the right solution', 'لنجد الحل المناسب')) ?> <?= arrow() ?></a></div>
      <div class="service-list">
        <?php $services = [
          ['01', t('Websites & web applications', 'المواقع وتطبيقات الويب'), t('Corporate websites, custom platforms, and CMS experiences built around your business.', 'مواقع شركات ومنصات مخصصة وأنظمة إدارة محتوى تناسب عملك.'), 'Next.js · React · Node.js · Laravel · WordPress', 'musaaid-quiz-platform', 'musaaid.ai / HashNet CMS'],
          ['02', t('Cross-platform mobile apps', 'تطبيقات جوال متعددة المنصات'), t('Mobile experiences for practical, everyday tasks, from calculators to branch operations.', 'تطبيقات جوال للمهام اليومية، من الحاسبات إلى إدارة عمليات الفروع.'), 'Flutter · Dart · React Native · Expo', 'dxn-calculator', 'DXN Türkiye / Mafatih Al Rizq'],
          ['03', t('Business systems & automation', 'أنظمة الأعمال والأتمتة'), t('Custom ERP, accounting tools, and automated workflows that move work out of spreadsheets and paper.', 'أنظمة ERP وأدوات محاسبة وسير عمل آلي ينقل العمل من الأوراق إلى البرمجيات.'), 'PHP · MySQL · REST APIs · Telegram', 'runners-erp', 'Runners ERP / DXN Taksim'],
          ['04', t('Integrations & ongoing care', 'التكاملات والدعم المستمر'), t('Connect your tools, maintain your website, and keep your product supported after handover.', 'ربط أدواتك وصيانة موقعك ومتابعة دعم منتجك بعد التسليم.'), 'API integrations · Git · Firebase · Vercel', 'hashnet-wordpress', 'musaaid.ai / HashNet WordPress']
        ]; foreach ($services as [$num, $title, $body, $tech, $link, $evidence]): ?>
        <article class="service"><span class="service-number"><?= $num ?></span><div><h3><?= e($title) ?></h3><p><?= e($body) ?></p><p class="service-tech" dir="ltr"><?= e($tech) ?></p><a href="<?= e(project_url($link)) ?>" class="service-evidence"><?= e(t('In practice: ', 'من أعمالي: ')) ?><?= e($evidence) ?> <?= external_arrow() ?></a></div></article>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section class="section container about-section" id="about" aria-labelledby="about-title">
    <div class="section-heading"><div><p class="eyebrow"><?= e(t('03 / THE PERSON & THE EXPERIENCE', '03 / عني وعن خبرتي')) ?></p><h2 id="about-title"><?= t('A developer who sees<br><span class="muted">the bigger picture.</span>', 'مطور يهتم<br><span class="muted">بالصورة الكاملة.</span>') ?></h2></div></div>
    <div class="about-layout">
      <div class="about-copy"><p class="about-lead"><?= e(t('I’m Salah Bakhash, a full-stack software developer working across web, mobile, and business software.', 'أنا صلاح بخاش، مطور برمجيات متكامل أعمل على الويب والجوال وأنظمة الأعمال.')) ?></p><p><?= e(t('My work spans custom ERP systems, published mobile apps, marketing platforms, and websites for clients in Lebanon, Türkiye, and the Gulf. I take projects from requirements and development through deployment, handover, and support.', 'تشمل أعمالي أنظمة ERP مخصصة وتطبيقات جوال منشورة ومنصات تسويقية ومواقع لعملاء في لبنان وتركيا والخليج. أتابع المشاريع من تحديد المتطلبات والتطوير إلى النشر والتسليم والدعم.')) ?></p><p><?= e(t('An earlier background in graphic design and video editing informs the way I think about clear, usable interfaces.', 'تضيف خبرتي السابقة في التصميم الجرافيكي والمونتاج منظوراً بصرياً لعملي على واجهات واضحة وسهلة الاستخدام.')) ?></p>
      <div class="about-fact"><strong>20<span>+</span></strong><span><?= t('Web & software projects<br>across freelance engagements', 'مشروع ويب وبرمجيات<br>ضمن العمل المستقل') ?></span></div>
      <div class="about-links"><a class="text-link" href="/media/salah-cv.pdf" download="Salah-Bakhash-CV.pdf"><?= e(t('Download my CV', 'تحميل سيرتي الذاتية')) ?> <span aria-hidden="true">↓</span></a><a class="text-link" href="https://mostaql.com/u/salah_bakhash/reviews" target="_blank" rel="noopener noreferrer"><?= e(t('Client feedback', 'تقييمات العملاء')) ?> <?= external_arrow() ?></a></div>
      <p class="languages"><?= e(t('Arabic · Native  /  English · Advanced  /  Turkish · Lower-intermediate', 'العربية · اللغة الأم  /  الإنجليزية · متقدم  /  التركية · دون المتوسط')) ?></p>
      </div>
      <div class="timeline">
      <article class="timeline-item"><div class="timeline-date"><?= e(t('SEP 2026 — PRESENT', 'سبتمبر 2026 — حتى الآن')) ?></div><h3>Coredex Solutions</h3><p class="timeline-role"><?= e(t('Software Developer · Full-time', 'مطور برمجيات · دوام كامل')) ?></p><p><?= e(t('Flutter mobile development, a new corporate website, and improvements to customer websites, including Built Up.', 'تطوير تطبيق جوال باستخدام Flutter وموقع جديد للشركة وتحسين مواقع العملاء، بما فيها Built Up.')) ?></p><a class="inline-link" href="<?= e(project_url('mafatih-al-rizq')) ?>"><?= e(t('Explore the work', 'استعرض العمل')) ?> <?= arrow() ?></a></article>
      <article class="timeline-item"><div class="timeline-date"><?= e(t('2022 — PRESENT', '2022 — حتى الآن')) ?></div><h3><?= e(t('Independent developer', 'مطور مستقل')) ?></h3><p class="timeline-role"><?= e(t('Full-stack development · Freelance', 'تطوير برمجيات متكامل · عمل حر')) ?></p><p><?= e(t('Custom websites, mobile applications, ERP systems, and integrations for direct clients and agency collaborations.', 'مواقع مخصصة وتطبيقات جوال وأنظمة ERP وتكاملات لعملاء مباشرين وبالتعاون مع وكالات.')) ?></p><a class="inline-link" href="<?= e(site_url('portfolio')) ?>"><?= e(t('Explore the projects', 'استعرض المشاريع')) ?> <?= arrow() ?></a></article>
      <article class="timeline-item"><div class="timeline-date">2023 — 2024</div><h3>HashNet Inc.</h3><p class="timeline-role"><?= e(t('Full-Stack Web Developer · Part-time', 'مطور ويب متكامل · دوام جزئي')) ?></p><p><?= e(t('A modular PHP/MySQL CMS, WordPress builds and maintenance, backups, content administration, and technical support.', 'نظام إدارة محتوى معياري بـPHP وMySQL، وتطوير وصيانة مواقع WordPress والنسخ الاحتياطي وإدارة المحتوى والدعم الفني.')) ?></p><a class="inline-link" href="<?= e(project_url('hashnet-cms')) ?>"><?= e(t('Read the CMS case study', 'اقرأ عن نظام إدارة المحتوى')) ?> <?= arrow() ?></a></article>
      <details class="earlier-experience"><summary><?= e(t('Earlier experience & education', 'الخبرات السابقة والتعليم')) ?><span aria-hidden="true">+</span></summary><div><h3>DXN Taksim</h3><p><?= e(t('Software development: billing-points automation and digitizing daily accounting.', 'تطوير برمجيات: أتمتة نقاط الفواتير ورقمنة المحاسبة اليومية.')) ?></p><a class="inline-link" href="<?= e(project_url('dxn-daily-accounting')) ?>"><?= e(t('See the accounting work', 'استعرض العمل المحاسبي')) ?> <?= arrow() ?></a><h3><?= e(t('Education', 'التعليم')) ?></h3><p><?= e(t('High School Diploma · Esenyurt İhsan Nakipoğlu High School, Türkiye · 2022. Graduated with honors, GPA 92%.', 'شهادة الثانوية العامة · مدرسة Esenyurt İhsan Nakipoğlu في تركيا · 2022. تخرجت بمرتبة شرف ومعدل 92%.')) ?></p></div></details>
      </div>
    </div>
    <div class="toolbox"><span class="eyebrow"><?= e(t('ALSO IN MY TOOLBOX', 'أدوات إضافية')) ?></span><p>HTML · CSS · JavaScript · REST APIs · GitHub · MySQL · Firebase · Postman · Figma</p></div>
  </section>
  <?php require __DIR__ . '/cta.php'; ?>
</main>
