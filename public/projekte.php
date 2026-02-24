<?php
declare(strict_types=1);

$pageTitle = "GFN Portfolio – Projekte";
$metaDescription = "Projektübersicht";
$active = "projekte";

require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../includes/nav.php";

require __DIR__ . "/../includes/config.php";
?>

<div class="card hud">
  <h2>Projekte</h2>
  <p>Ein paar Missionen im Bordcomputer-Protokoll:</p>

  <div class="hr"></div>

  <div class="projects">
    <div class="project">
      <img src="<?= $BASE_URL ?>/assets/project_portfolio.png" alt="Projekt: Portfolio" />
      <h3>Portfolio Modular (PHP)</h3>
      <p>Header/Footer/Nav als Includes – einmal pflegen, überall gleich.</p>
      <div class="meta">PHP • Struktur • Includes</div>
    </div>

    <div class="project">
      <img src="<?= $BASE_URL ?>/assets/project_form.png" alt="Projekt: Kontaktformular" />
      <h3>Kontaktformular</h3>
      <p>POST-Handler + Redirect + Bestätigung. Kein Double-Submit beim Reload.</p>
      <div class="meta">PHP • Validation • PRG</div>
    </div>

    <div class="project">
      <img src="<?= $BASE_URL ?>/assets/project_terminal.png" alt="Projekt: Terminal" />
      <h3>Daten-Terminal</h3>
      <p>Tabellenlayout im selben Style: thead/tbody/tfoot + Hover.</p>
      <div class="meta">HTML • Tabellen • UI</div>
    </div>
  </div>
</div>

<?php require __DIR__ . "/../includes/footer.php"; ?>