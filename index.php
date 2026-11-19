<?php

// const HOST_PATH = "http://customforsalah.test/";
// define('HOST_PATH', $_SERVER['HTTP_HOST']);
define('HOST_PATH', "http://salah-portfolio.local/");

$get = $_GET["url"] ?? "";
$url = explode("/", trim($get, "/"));
$langs = ["en", "ar"]; // 1st language is the default

$pages = ["home", "about", "strength", "portfolio", "contact"]; // 1st page is the default

$_lang = isset($url[0]) && in_array($url[0], $langs) ? $url[0] : $langs[0];
$_page = isset($url[1]) && in_array($url[1], $pages) ? $url[1] : $pages[0];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $env = parse_ini_file('.env');

  $apiToken = $env["API_TOKEN"];

  $data = [
    "chat_id" => $env["CHAT_ID"],
    "text" => "message: " . $_POST["message"] . "\n contact: " . $_POST["contact"] . "\n name: " . $_POST["name"]
  ];

  $response = file_get_contents("http://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
  //   var_dump("Location: " . "https://" . HOST_PATH . "/" . $_lang);
  header("Location: " . "https://" . HOST_PATH . "/" . $_lang);
  exit();
}


$projects = require __DIR__ . '/includes/projects.php';
$isProjectRoute = $_page === 'portfolio' && isset($url[2]);
$project = $isProjectRoute ? ($projects[$url[2]] ?? null) : null;
$isPreview = $isProjectRoute && ($url[3] ?? '') === 'preview';
if ($isProjectRoute && isset($url[$isPreview ? 4 : 3])) {
  $project = null;
}
if ($isProjectRoute && !$project) {
  http_response_code(404);
}

if ($_lang == "ar") {

  include_once "langs/ar.php";
}

function __($txt)
{

  global $TRANSLATE;

  if (isset($TRANSLATE) && isset($TRANSLATE[$txt])) {
    return $TRANSLATE[$txt];
  }
  return $txt;
}

function e(string $text): string
{
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

if ($isProjectRoute) {
  if ($project) {
    $projectPath = "/{$_lang}/portfolio/{$url[2]}";
    $otherLang = $_lang === 'ar' ? 'en' : 'ar';
    $alternatePath = "/{$otherLang}/portfolio/{$url[2]}" . ($isPreview ? '/preview' : '');
    $pageTitle = $project[$_lang]['title'] . ($isPreview ? ' | ' . __('Screenshot preview') : '');
    $pageDescription = $project[$_lang]['description'];
  } else {
    $pageTitle = __('Project not found');
  }
}

include "includes/head.php";
include "includes/header.php";

include $isProjectRoute ? 'includes/project-detail.php' : 'includes/content.php';
include "includes/close.php";
