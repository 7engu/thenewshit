<?php
declare(strict_types=1);

$pageTitle = "GFN Portfolio – Start";
$metaDescription = "Landingpage des modularisierten Alien-Portfolios";
$active = "index";

require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../includes/nav.php";

require __DIR__ . "/../includes/config.php";
?>

<div class="hero card hud">
  <p class="kicker">WILLKOMMEN, KOMMANDANT!</p>
  <h2>Portfolio // Crew-Log</h2>
  <p>
    Web-Kram mit HTML & CSS, jetzt modularisiert mit PHP.
    Einheitlicher Header/Footer, mehrere Seiten, und ein Kontaktformular, das wirklich „ankommt“.
  </p>
  <div class="pulse" aria-hidden="true"></div>

  <div class="badges" aria-label="Schwerpunkte">
    <span class="badge">Semantik</span>
    <span class="badge">Modularisierung</span>
    <span class="badge">Form Handling</span>
    <span class="badge">Alien UI</span>
  </div>
</div>

<div class="hr"></div>

<div class="grid">
  <div class="card hud">
    <h2>Überblick</h2>
    <p>
      Dieses Portfolio ist ein Übungsprojekt: saubere Struktur, wiederverwendbare PHP-Includes
      und ein Kontaktformular mit Bestätigung.
    </p>
    <p>
      Navigiere zu <a href="<?= $BASE_URL ?>/kontakt.php">Kontakt</a>, schick eine Nachricht,
      und du bekommst eine Eingangsbestätigung.
    </p>

    <div class="hr"></div>

    <h2>Tech-Stack</h2>
    <div class="badges">
      <span class="badge"><img src="<?= $BASE_URL ?>/assets/icon_html.png" alt="HTML" width="18" height="18"> HTML</span>
      <span class="badge"><img src="<?= $BASE_URL ?>/assets/icon_css.png" alt="CSS" width="18" height="18"> CSS</span>
      <span class="badge"><img src="<?= $BASE_URL ?>/assets/icon_php.png" alt="PHP" width="18" height="18"> PHP</span>
      <span class="badge"><img src="<?= $BASE_URL ?>/assets/icon_contact.png" alt="Mail" width="18" height="18"> Kontakt</span>
    </div>
  </div>

  <div class="card hud">
    <h2>Poster</h2>
    <figure>
      <img class="poster" src="<?= $BASE_URL ?>/assets/poster.png" alt="GFN Poster" />
      <figcaption>GFN // Im Homeoffice hört dich niemand schnarchen.</figcaption>
    </figure>
  </div>
</div>

<?php require __DIR__ . "/../includes/footer.php"; ?>