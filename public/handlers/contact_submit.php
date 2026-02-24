<?php
declare(strict_types=1);

require __DIR__ . "/../../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: " . $BASE_URL . "/kontakt.php?err=" . rawurlencode("Ungültige Anfrage."));
  exit;
}

function clean(string $s): string {
  $s = trim($s);
  $s = str_replace(["\r\n", "\r"], "\n", $s);
  return $s;
}

$name = isset($_POST["name"]) ? clean((string)$_POST["name"]) : "";
$email = isset($_POST["email"]) ? clean((string)$_POST["email"]) : "";
$message = isset($_POST["message"]) ? clean((string)$_POST["message"]) : "";

if (mb_strlen($name) < 2 || mb_strlen($name) > 80) {
  header("Location: " . $BASE_URL . "/kontakt.php?err=" . rawurlencode("Name muss 2–80 Zeichen haben."));
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 120) {
  header("Location: " . $BASE_URL . "/kontakt.php?err=" . rawurlencode("Bitte gültige E-Mail angeben."));
  exit;
}

if (mb_strlen($message) < 5 || mb_strlen($message) > 2000) {
  header("Location: " . $BASE_URL . "/kontakt.php?err=" . rawurlencode("Nachricht muss 5–2000 Zeichen haben."));
  exit;
}

$logDir = __DIR__ . "/../../data";
$logFile = $logDir . "/contacts.log";

if (!is_dir($logDir)) {
  @mkdir($logDir, 0755, true);
}

$entry = [
  "time" => date("c"),
  "ip" => $_SERVER["REMOTE_ADDR"] ?? "",
  "name" => $name,
  "email" => $email,
  "message" => $message
];

$line = json_encode($entry, JSON_UNESCAPED_UNICODE) . "\n";
$ok = @file_put_contents($logFile, $line, FILE_APPEND | LOCK_EX);

if ($ok === false) {
  header("Location: " . $BASE_URL . "/kontakt.php?err=" . rawurlencode("Speichern fehlgeschlagen (Dateirechte)."));
  exit;
}

/* PRG: Redirect nach Erfolg */
header("Location: " . $BASE_URL . "/kontakt.php?ok=1");
exit;