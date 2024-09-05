<!DOCTYPE html>
<html lang="<?= $_lang; ?>" class="theme-1">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="shortcut icon" href="<?= HOST_PATH; ?>favicon.ico" type="image/x-icon">
  <title>Salah Bakhash</title>
  <!-- font awesome @5.15.4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- custom style (global) -->
  <link rel="stylesheet" href="/css/style.css">
  <?php if ($_lang == "ar") : ?>
    <!-- custom style (RTL language) -->
    <link rel="stylesheet" href="/css/ar.css">
  <?php endif; ?>
  <!-- custom style (themes) -->
  <link rel="stylesheet" id="themes" class="themes" href="/css/themes/themes.css">
</head>

<body class="dark">
  <div class="main-container">