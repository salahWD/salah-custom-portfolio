<!doctype html>
<html lang="<?= e($_lang) ?>" dir="<?= $_lang === 'ar' ? 'rtl' : 'ltr' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f7f7f2">
  <meta name="description" content="<?= e($description) ?>">
  <title><?= e($pageTitle) ?> — <?= e(t('Salah Bakhash', 'صلاح بخاش')) ?></title>
  <meta property="og:title" content="<?= e($pageTitle) ?> — Salah Bakhash">
  <meta property="og:description" content="<?= e($description) ?>">
  <meta property="og:type" content="<?= $project ? 'article' : 'website' ?>">
  <meta property="og:image" content="https://salahbakhash.com/images/home-image2.jpg">
  <?php $canonicalPath = $_page === 'home' ? '' : $_page . ($slug ? '/' . $slug : ''); ?>
  <?php if (!$notFound): ?>
  <link rel="canonical" href="https://salahbakhash.com<?= e(site_url($canonicalPath)) ?>">
  <link rel="alternate" hreflang="en" href="https://salahbakhash.com/en/<?= e($canonicalPath) ?>">
  <link rel="alternate" hreflang="ar" href="https://salahbakhash.com/ar/<?= e($canonicalPath) ?>">
  <?php else: ?><meta name="robots" content="noindex"><?php endif ?>
  <link rel="icon" href="/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;450;500;550;600;650;700&family=Manrope:wght@400;500;600;650;700;750;800&family=Noto+Sans+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= e(asset_url('/css/style.css')) ?>">
  <?php if ($_lang === 'ar'): ?><link rel="stylesheet" href="<?= e(asset_url('/css/ar.css')) ?>"><?php endif ?>
  <script>document.documentElement.classList.add("js");</script>
  <script src="<?= e(asset_url('/js/script.js')) ?>" defer></script>
</head>
<body>
<a class="skip-link" href="#main"><?= e(t('Skip to content', 'انتقل إلى المحتوى')) ?></a>
