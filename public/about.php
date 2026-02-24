<?php
declare(strict_types=1);

$pageTitle = "GFN Portfolio – About";
$metaDescription = "Über mich – Alien-Portfolio";
$active = "about";

require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../includes/nav.php";

require __DIR__ . "/../includes/config.php";
?>

<div class="card hud">
  <h2>About me</h2>
  <p>
    Ich baue Webseiten mit Fokus auf Struktur, Lesbarkeit und konsistentes Design.
    Meine Spezialfähigkeit: Dinge aussehen lassen wie ein Raumschiff-Terminal,
    ohne dass dabei die Bedienbarkeit stirbt.
  </p>

  <div class="hr"></div>

  <h2>Profil</h2>
  <figure>
    <img class="poster" style="max-width:260px" src="<?= $BASE_URL ?>/assets/avatar.png" alt="Alien Avatar" />
    <figcaption>Alien Developer (rein symbolisch, ich schwöre).</figcaption>
  </figure>

  <div class="hr"></div>

  <h2>Stärken</h2>
  <ul>
    <li>Semantisches HTML</li>
    <li>CSS Layout & Responsive Basics</li>
    <li>PHP Includes (Header/Footer/Nav modular)</li>
    <li>Formular-Handling (POST, Validierung, Bestätigung)</li>
  </ul>
</div>

<?php require __DIR__ . "/../includes/footer.php"; ?>