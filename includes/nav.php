<?php
declare(strict_types=1);
require __DIR__ . "/config.php";

$active = $active ?? "";

function nav_active(string $key, string $active): string {
  return $key === $active ? "active" : "";
}
?>

<header class="card hud site-header">
  <div class="brand">
    <h1 class="brand-title glitch" data-text="GFN">GFN</h1>
    <p class="brand-sub">Im Homeoffice hört dich niemand schnarchen.</p>
    <div class="led">STATUS: ONLINE</div>
  </div>

  <nav class="nav" aria-label="Hauptnavigation">
    <a class="<?= nav_active("index", $active) ?>" href="<?= $BASE_URL ?>/index.php">Start</a>
    <a class="<?= nav_active("about", $active) ?>" href="<?= $BASE_URL ?>/about.php">About</a>
    <a class="<?= nav_active("projekte", $active) ?>" href="<?= $BASE_URL ?>/projekte.php">Projekte</a>
    <a class="<?= nav_active("tabellen", $active) ?>" href="<?= $BASE_URL ?>/tabellen.php">Tabellen</a>
    <a class="<?= nav_active("kontakt", $active) ?>" href="<?= $BASE_URL ?>/kontakt.php">Kontakt</a>
    <a class="<?= nav_active("impressum", $active) ?>" href="<?= $BASE_URL ?>/impressum.php">Impressum</a>
    <a href="https://www.gfn.de" target="_blank" rel="noopener">GFN extern</a>
  </nav>
</header>

<div class="hr"></div>