<?php
declare(strict_types=1);

require __DIR__ . '/includes/bootstrap.php';
require __DIR__ . '/includes/data.php';

$rawPath = $_GET['url'] ?? parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$parts = explode('/', trim(is_string($rawPath) ? $rawPath : '', '/'));
$_lang = in_array($parts[0] ?? '', ['en', 'ar'], true) ? array_shift($parts) : 'en';
if ($parts === [''] || $parts === ['index.php']) $parts = [];
$_page = $parts[0] ?? 'home';
$slug = $parts[1] ?? null;
$notFound = count($parts) > 2 || !in_array($_page, ['home', 'portfolio', 'contact', 'about', 'strength'], true);

if (in_array($_page, ['about', 'strength'], true) && !$notFound) {
    header('Location: /' . $_lang . '/#' . ($_page === 'about' ? 'about' : 'expertise'), true, 302);
    exit;
}
$project = $slug !== null ? ($projects[$slug] ?? null) : null;
if ($slug !== null && ($_page !== 'portfolio' || $project === null)) $notFound = true;
if ($notFound) http_response_code(404);

$form = ['name' => '', 'contact' => '', 'message' => ''];
$formErrors = [];
$formStatus = null;
$emailDraft = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_page !== 'contact' || $notFound) {
        http_response_code(405);
        header('Allow: GET, HEAD');
        $notFound = true;
    } else {
        require __DIR__ . '/includes/contact-handler.php';
    }
}
$pageTitle = $notFound ? t('Page not found', 'الصفحة غير موجودة') :
    ($project ? L($project['title']) : match ($_page) {
        'portfolio' => t('Projects', 'المشاريع'),
        'contact' => t('Let’s talk', 'لنتحدث'),
        default => t('Full-stack software developer', 'مطور برمجيات متكامل')
    });
$description = $project ? L($project['summary']) : t(
    'Salah Bakhash builds websites, mobile apps, business systems, and workflow automation for businesses in Lebanon, Türkiye, and the Gulf.',
    'صلاح بخاش يطور مواقع وتطبيقات جوال وأنظمة أعمال وأدوات أتمتة للشركات في لبنان وتركيا والخليج.'
);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
if ($notFound) {
    echo '<main id="main" class="container error-page"><span class="eyebrow">404</span><h1>' . e(t('A little off track.', 'هذه الصفحة غير موجودة.')) . '</h1><p>' . e(t('This page could not be found. Explore the projects or return home.', 'تعذر العثور على الصفحة. يمكنك استعراض المشاريع أو العودة للرئيسية.')) . '</p><a class="button" href="' . e(site_url()) . '">' . e(t('Back to home', 'العودة للرئيسية')) . ' ' . arrow() . '</a></main>';
} elseif ($project) {
    require __DIR__ . '/includes/project.php';
} elseif ($_page === 'portfolio') {
    require __DIR__ . '/includes/portfolio.php';
} elseif ($_page === 'contact') {
    require __DIR__ . '/includes/contact.php';
} else {
    require __DIR__ . '/includes/content.php';
}
require __DIR__ . '/includes/close.php';
