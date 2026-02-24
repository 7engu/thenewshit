<?php
declare(strict_types=1);

$pageTitle = "GFN Portfolio – Impressum";
$metaDescription = "Impressum / Datenschutz (fiktiv)";
$active = "impressum";

require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../includes/nav.php";
?>

<div class="card hud">
  <h2>Impressum</h2>
  <p><strong>Angaben gemäß § 5 TMG (rein fiktiv – Übungsprojekt)</strong></p>

  <p>
    GFN Homeoffice Command Center<br>
    Deck 7, Raumstation „Kaffeetasse“<br>
    Orbitale Umlaufbahn 42<br>
    12345 Sternsystem Alpha
  </p>

  <p>
    Vertreten durch:<br>
    Max Mustermann, Chief Snack Officer & Leiter der Schnarch-Abteilung
  </p>

  <p>
    Kontakt:<br>
    Funkkanal: +49 000 123456789<br>
    Subraum-Mail: kontakt@homeoffice-alien.dev
  </p>

  <div class="hr"></div>

  <h2>Datenschutz</h2>
  <p>
    Diese Website ist ein Schul-/Übungsprojekt. Es gibt kein Tracking,
    keine Cookies (außer imaginäre), und keine KI, die nachts heimlich deine Tastatur belauscht.
  </p>
</div>

<?php require __DIR__ . "/../includes/footer.php"; ?>