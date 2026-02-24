<?php
declare(strict_types=1);
require __DIR__ . "/config.php";

$pageTitle = $pageTitle ?? "GFN Portfolio";
$metaDescription = $metaDescription ?? "GFN Portfolio im Alien-Terminal-Style";
$bodyClass = $bodyClass ?? "theme theme-green"; // theme-green | theme-cyan | theme-amber | theme-rose
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, "UTF-8") ?>" />

  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, "UTF-8") ?></title>

  <link rel="icon" href="<?= $BASE_URL ?>/assets/favicon.ico" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/styles.css" />
</head>

<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, "UTF-8") ?>">
  <div class="container">