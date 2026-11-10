<main id="main">
  <section class="container page-intro"><a class="breadcrumb" href="<?= e(site_url()) ?>"><?= e(t('Home', 'الرئيسية')) ?></a><p class="eyebrow"><?= e(t('THE PROJECT INDEX', 'فهرس المشاريع')) ?></p><div class="page-intro-row"><h1><?= t('Work with<br><em>a purpose.</em>', 'أعمال<br><em>لها هدف.</em>') ?></h1><p><?= e(t('A closer look at the websites, applications, systems, and tools I’ve built. Each one starts with a different problem to solve.', 'نظرة على المواقع والتطبيقات والأنظمة والأدوات التي طورتها. لكل منها تحدٍ مختلف وحل يناسبه.')) ?></p></div></section>
  <section class="container project-index" aria-labelledby="index-title">
    <h2 id="index-title" class="sr-only"><?= e(t('All projects', 'جميع المشاريع')) ?></h2>
    <form class="project-filters" method="get" action="<?= e(site_url('portfolio')) ?>" aria-label="<?= e(t('Filter projects', 'تصفية المشاريع')) ?>">
      <?php $filter = is_string($_GET['category'] ?? null) && isset($categories[$_GET['category']]) ? $_GET['category'] : 'all'; ?>
      <button type="submit" name="category" value="all" aria-pressed="<?= $filter === 'all' ? 'true' : 'false' ?>"><?= e(t('All work', 'كل الأعمال')) ?><span><?= count($projects) ?></span></button>
      <?php foreach ($categories as $key => $label): ?><button type="submit" name="category" value="<?= e($key) ?>" aria-pressed="<?= $filter === $key ? 'true' : 'false' ?>"><?= e(L($label)) ?><span><?= count(array_filter($projects, fn($p) => $p['category'] === $key)) ?></span></button><?php endforeach ?>
    </form>
    <p id="filter-status" class="sr-only" role="status" aria-live="polite"><?= count(array_filter($projects, fn($p) => $filter === 'all' || $p['category'] === $filter)) ?> <?= e(t('projects shown', 'مشروع معروض')) ?></p>
    <div class="project-grid"><?php foreach ($projects as $key => $item): ?><div class="project-slot" <?= $filter !== 'all' && $filter !== $item['category'] ? 'hidden' : '' ?>><?php project_card($key, $item); ?></div><?php endforeach ?></div>
    <p class="visual-note"><?= e(t('Project graphics illustrate the work; they are not product screenshots. Some projects have no public release link.', 'رسومات المشاريع توضيحية، وليست لقطات شاشة للمنتجات. بعض المشاريع لا يتوفر لها رابط إصدار عام.')) ?></p>
  </section>
  <section class="section container archive" id="archive" aria-labelledby="archive-title"><div class="section-heading"><div><p class="eyebrow"><?= e(t('FROM THE ORIGINAL PORTFOLIO', 'من معرض الأعمال الأصلي')) ?></p><h2 id="archive-title"><?= e(t('The visual archive.', 'أرشيف مرئي.')) ?></h2></div><p><?= e(t('Website screens preserved from my earlier portfolio.', 'واجهات مواقع محفوظة من معرض أعمالي السابق.')) ?></p></div><div class="archive-grid">
  <?php $archive = [
      ['Chess club landing page', 'صفحة هبوط لنادي شطرنج'],
      ['Arabic business portal', 'بوابة أعمال باللغة العربية'],
      ['Product catalog website', 'موقع كتالوج منتجات'],
      ['Designer portfolio', 'معرض أعمال مصمم'],
      ['Smart Step landing page', 'صفحة هبوط Smart Step'],
      ['Web agency landing page', 'صفحة هبوط لوكالة ويب']
    ]; foreach ($archive as $i => [$en, $ar]): $image = '/images/portfolio-' . ($i + 1) . '.jpg'; ?>
    <a class="archive-card" href="<?= e($image) ?>" target="_blank" rel="noopener noreferrer"><div><img src="<?= e($image) ?>" alt="<?= e(t($en, $ar)) ?>" width="500" height="360" loading="lazy"></div><h3><?= e(t($en, $ar)) ?> <?= external_arrow() ?></h3><span><?= e(t('View archived image', 'عرض الصورة المؤرشفة')) ?></span></a>
  <?php endforeach ?>
  </div></section>
  <?php require __DIR__ . '/cta.php'; ?>
</main>
