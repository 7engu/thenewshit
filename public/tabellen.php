<?php
declare(strict_types=1);

$pageTitle = "GFN Portfolio – Tabellen";
$metaDescription = "Tabellen & Übersicht";
$active = "tabellen";

require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../includes/nav.php";
?>

<div class="card hud">
  <h2>Daten-Terminal</h2>
  <p>Weil Chaos nur unstrukturiertes Datenmaterial ist.</p>

  <div class="hr"></div>

  <table>
    <thead>
      <tr>
        <th>Bereich</th>
        <th>Beschreibung</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>HTML</td>
        <td>Semantik & Struktur</td>
        <td>OK</td>
      </tr>
      <tr>
        <td>CSS</td>
        <td>Alien Look & Responsive</td>
        <td>OK</td>
      </tr>
      <tr>
        <td>PHP</td>
        <td>Includes + Form Handling</td>
        <td>ONLINE</td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td colspan="3">Hinweis: Übungsdaten (keine echte Raumstations-Telemetrie).</td>
      </tr>
    </tfoot>
  </table>
</div>

<?php require __DIR__ . "/../includes/footer.php"; ?>