<?php
declare(strict_types=1);

header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('X-Frame-Options: SAMEORIGIN');
session_set_cookie_params([
    'httponly' => true,
    'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
    'samesite' => 'Lax',
]);
session_start();
if (!isset($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));

function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function t(string $en, string $ar): string { global $_lang; return $_lang === 'ar' ? $ar : $en; }
function L(array|string $value): string { global $_lang; return is_array($value) ? ($value[$_lang] ?? $value['en']) : $value; }
function site_url(string $path = ''): string { global $_lang; return '/' . $_lang . '/' . ltrim($path, '/'); }
function arrow(): string { return '<svg class="arrow" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>'; }
function external_arrow(): string { return '<svg class="arrow" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 18 18 6M6 6h12v12" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>'; }
function asset_url(string $path): string {
    $path = '/' . ltrim($path, '/');
    $file = dirname(__DIR__) . $path;
    $version = is_file($file) ? substr(hash_file('sha256', $file), 0, 12) : 'missing';
    return $path . '?v=' . $version;
}
function project_url(string $slug): string { return site_url('portfolio/' . $slug); }

function project_art(array $project): void {
    $style = $project['art'];
    echo '<div class="project-art art-' . e($style) . '" aria-hidden="true">';
    if ($style === 'erp') {
        echo '<div class="art-orbit orbit-one"></div><div class="art-orbit orbit-two"></div><div class="erp-center">R<span>RUNNERS</span></div><span class="art-node node-a">' . e(t('Operations', 'العمليات')) . '</span><span class="art-node node-b">' . e(t('Workflows', 'سير العمل')) . '</span><span class="art-node node-c">' . e(t('Business systems', 'أنظمة الأعمال')) . '</span><span class="art-caption">' . e(t('ERP · SYSTEM OVERVIEW', 'ERP · نظرة على النظام')) . '</span>';
    } elseif ($style === 'mobile') {
        echo '<div class="mobile-orbit"></div><div class="phone-shape"><div class="phone-notch"></div><span class="phone-label">DXN</span><div class="phone-glyph">÷<span>×</span></div><div class="phone-line"></div><div class="phone-keys"><i></i><i></i><i></i><i></i><i></i><i></i></div><span class="phone-footer">REACT NATIVE / EXPO</span></div><span class="art-caption">' . e(t('MOBILE · CONCEPT DIAGRAM', 'الجوال · رسم توضيحي')) . '</span>';
    } elseif ($style === 'quiz') {
        echo '<span class="quiz-word">musaaid<span>.ai</span></span><div class="quiz-path"><span>?</span><i></i><span>↗</span><i></i><span>✓</span></div><span class="art-caption">' . e(t('QUIZZES → INTEGRATIONS → MARKETING', 'اختبارات ← تكاملات ← تسويق')) . '</span>';
    } elseif ($style === 'cms') {
        echo '<div class="cms-blocks"><span>&lt;/&gt;</span><span>Aa</span><span>▦</span><span>↗</span></div><span class="cms-word">HashNet<span>Modular CMS</span></span><span class="art-caption">PHP / MYSQL</span>';
    } else {
        $symbols = ['flutter' => 'M', 'web' => '&lt;/&gt;', 'automation' => '↗', 'wordpress' => 'W', 'accounting' => '∑'];
        echo '<span class="simple-symbol">' . ($symbols[$style] ?? '&lt;/&gt;') . '</span><span class="art-caption">' . e(L($project['category_label'])) . '</span>';
    }
    echo '</div>';
}

function project_card(string $slug, array $project, bool $featured = false): void {
    echo '<article class="project-card" data-category="' . e($project['category']) . '"><a class="project-visual" tabindex="-1" aria-hidden="true" href="' . e(project_url($slug)) . '">';
    project_art($project);
    echo '</a><div class="project-meta"><span>' . e(L($project['category_label'])) . '</span><span>' . e(L($project['context'])) . '</span></div><h3><a href="' . e(project_url($slug)) . '">' . e(L($project['title'])) . '<span class="card-arrow">' . external_arrow() . '</span></a></h3><p>' . e(L($project['summary'])) . '</p><div class="tags">';
    foreach ($project['tags'] as $tag) echo '<span>' . e($tag) . '</span>';
    echo '</div></article>';
}

function text_length(string $value): int { $length = preg_match_all('/./us', $value); return $length === false ? -1 : $length; }
