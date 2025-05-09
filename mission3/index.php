<?php
session_start();

// Génération d’un token CSRF unique si absent
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Initialisation des messages
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification du token CSRF
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("⚠️ Tentative CSRF détectée. Requête bloquée.");
    }

    // Nettoyage et sécurisation du message
    $message = trim($_POST['message']);
    $safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    // Stockage en session
    $_SESSION['messages'][] = $safe_message;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mission 3 - Sécurisée (XSS + CSRF)</title>
</head>
<body>
    <h1>Envoyer un message (sécurisé)</h1>

    <form method="post" action="">
        <label for="message">Message :</label><br>
        <input type="text" name="message" id="message" required><br><br>

        <!-- Token CSRF caché -->
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

        <button type="submit">Envoyer</button>
    </form>

    <h2>Messages reçus :</h2>
    <ul>
        <?php foreach ($_SESSION['messages'] as $msg): ?>
            <li><?= $msg ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>