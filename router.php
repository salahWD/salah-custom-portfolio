<?php
// Local PHP development server. Apache uses .htaccess in production.
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/');
if (preg_match('~(?:^|/)(?:\.|includes(?:/|$)|langs(?:/|$)|private(?:/|$)|scripts(?:/|$)|tests(?:/|$)|node_modules(?:/|$)|my work(?:/|$))|^/(?:Salah_Bakhash_CV|PORTFOLIO_BRIEF|CONTENT_COVERAGE|REVIEW_NOTES|README)~i', $path)) {
    http_response_code(403);
    exit('Forbidden');
}
$file = realpath(__DIR__ . $path);
if ($file && str_starts_with($file, __DIR__ . DIRECTORY_SEPARATOR) && is_file($file) && preg_match('~^/(?:css/|js/|images/|media/|favicon\.)~', $path)) return false;
require __DIR__ . '/index.php';
