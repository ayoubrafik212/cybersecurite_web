<?php
$base_dir = __DIR__ . "/files/";
$forbidden_files = ['.env', '.htaccess', 'config.php']; // Liste noire

if (isset($_GET['file'])) {
    $filename = basename($_GET['file']);

    // Blocage si fichier interdit
    if (in_array($filename, $forbidden_files)) {
        die("⛔ Accès refusé à ce fichier.");
    }

    $filepath = realpath($base_dir . $filename);

    // Vérifie que le fichier est bien dans le dossier autorisé
    if ($filepath && str_starts_with($filepath, realpath($base_dir))) {
        if (file_exists($filepath)) {
            header("Content-Type: text/plain");
            echo file_get_contents($filepath);
        } else {
            echo "❌ Fichier introuvable.";
        }
    } else {
        echo "⛔ Accès non autorisé.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Information Disclosure - Sécurisé</title></head>
<body>
    <h1>Accès fichiers autorisés uniquement</h1>
    <form method="get">
        <label>Nom du fichier :</label><br>
        <input type="text" name="file"><br><br>
        <button type="submit">Afficher</button>
    </form>
</body>
</html>
