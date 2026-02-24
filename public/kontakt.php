<?php
declare(strict_types=1);

$pageTitle = "GFN Portfolio – Kontakt";
$metaDescription = "Kontaktformular";
$active = "kontakt";

require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../includes/nav.php";

require __DIR__ . "/../includes/config.php";

$ok = isset($_GET["ok"]) && $_GET["ok"] === "1";
$err = isset($_GET["err"]) ? (string)$_GET["err"] : "";
?>

<div class="card hud">
  <h2>Kontakt</h2>

  <?php if ($ok): ?>
    <p><strong>✅ Nachricht eingegangen!</strong> Der Bordcomputer hat sie gespeichert.</p>
  <?php elseif ($err !== ""): ?>
    <p><strong>⚠️ Fehler:</strong> <?= htmlspecialchars($err, ENT_QUOTES, "UTF-8") ?></p>
  <?php else: ?>
    <p>Demo-Formular: wird gespeichert und du bekommst eine Bestätigung.</p>
  <?php endif; ?>

  <div class="hr"></div>

  <form action="<?= $BASE_URL ?>/handlers/contact_submit.php" method="post">
    <label for="name">Name</label>
    <input id="name" name="name" type="text" required minlength="2" maxlength="80" placeholder="Crew-Mitglied" />

    <label for="email">E-Mail</label>
    <input id="email" name="email" type="email" required maxlength="120" placeholder="crew@nostromo.local" />

    <label for="message">Nachricht</label>
    <textarea id="message" name="message" required minlength="5" maxlength="2000" placeholder="Logbucheintrag..."></textarea>

    <button type="submit">Senden</button>
  </form>
</div>

<?php require __DIR__ . "/../includes/footer.php"; ?>