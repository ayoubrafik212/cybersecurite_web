<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $upload_dir = __DIR__ . '/uploads/';

    if (!file_exists($upload_dir)) {
        mkdir($upload_dir);
    }

    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = basename($_FILES['file']['name']);
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Autoriser seulement certaines extensions
    $allowed_exts = ['jpg', 'png', 'pdf', 'txt'];
    if (!in_array($file_ext, $allowed_exts)) {
        die("⛔ Type de fichier non autorisé.");
    }

    // Renommer pour éviter l'exécution directe
    $safe_name = uniqid() . '.' . $file_ext;
    $destination = $upload_dir . $safe_name;

    if (move_uploaded_file($file_tmp, $destination)) {
        echo "✅ Fichier téléchargé avec succès : $safe_name";
    } else {
        echo "❌ Échec du téléchargement.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Upload sécurisé</title></head>
<body>
    <h1>Uploader un fichier (sécurisé)</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>