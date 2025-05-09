<?php
session_start();

// Authentifiants valides
$valid_login = 'admin';
$valid_password = '1234';

if (!isset($_SESSION['tries'])) {
    $_SESSION['tries'] = 0;
}

$lockout_time = 60; // secondes
$message = '';

// Blocage après 3 tentatives
if (isset($_SESSION['lock_time']) && time() < $_SESSION['lock_time']) {
    $wait = $_SESSION['lock_time'] - time();
    $message = "🚫 Trop de tentatives. Réessaie dans $wait secondes.";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === $valid_login && $password === $valid_password) {
        $message = "✅ Connexion réussie !";
        $_SESSION['tries'] = 0;
        unset($_SESSION['lock_time']);
    } else {
        $_SESSION['tries']++;

        if ($_SESSION['tries'] >= 3) {
            $_SESSION['lock_time'] = time() + $lockout_time;
            $message = "🚫 Trop de tentatives. Bloqué pour $lockout_time secondes.";
        } else {
            $tries_left = 3 - $_SESSION['tries'];
            $message = "❌ Identifiants incorrects. Tentatives restantes : $tries_left";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Brute Force - Sécurisé</title></head>
<body>
    <h1>Connexion sécurisée</h1>
    <form method="post">
        Login : <input type="text" name="login"><br>
        Mot de passe : <input type="password" name="password"><br>
        <button type="submit">Se connecter</button>
    </form>
    <p><?= $message ?></p>
</body>
</html>