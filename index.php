<?php

const HOST_PATH = "http://customforsalah.test/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $env = parse_ini_file('.env');

  $apiToken = $env["API_TOKEN"];

  $data = [
    "chat_id" => $env["CHAT_ID"],
    "text" => "message: " . $_POST["message"] . "\n contact: " . $_POST["contact"] . "\n name: " . $_POST["name"]
  ];

  $response = file_get_contents("http://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
  header("Location: " . HOST_PATH);
  exit();
}

$get = $_GET["url"] ?? "";
$url = explode("/", $get);
$langs = ["en", "ar", "tr"]; // 1st language is the default

$pages = ["home", "about", "strength", "portfolio", "contact"]; // 1st page is the default

$_lang = isset($url[0]) && in_array($url[0], $langs) ? $url[0] : $langs[0];
$_page = isset($url[1]) && in_array($url[1], $pages) ? $url[1] : $pages[0];

include_once "langs/$_lang.php";

include "includes/head.php";
include "includes/header.php";

include "includes/content.php";
include "includes/close.php";
