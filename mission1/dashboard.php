<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7fa;
        }

        header {
            background-color: #2575fc;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #1a5edb;
            padding: 10px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
        }

        main {
            padding: 40px;
        }

        h1 {
            margin: 0;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .card h2 {
            margin-top: 0;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th,
        .data-table td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        .data-table th {
            background-color: #f0f4f8;
        }

        .token {
            font-family: monospace;
            background: #f9f2f4;
            padding: 4px 8px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur votre tableau de bord</h1>
    </header>

    <nav>
        <div>Utilisateur connecté : <strong>johndoe@gmail.com</strong></div>
        <div><a href="index.php" style="color:white; text-decoration: underline;">Déconnexion</a></div>
    </nav>

    <main>
        <div class="card">
            <h2>Informations de compte</h2>
            <p><strong>Email :</strong> johndoe@gmail.com</p>
            <p><strong>Nom complet :</strong> John DOe</p>
            <p><strong>Rôle :</strong> Administrateur</p>
            <p><strong>Jeton API :</strong> <span class="token">c1a7b893d9e24f9f8a76c3e12f00c8ef</span></p>
        </div>

        <div class="card">
            <h2>Historique des connexions</h2>
            <table class="data-table">
                <tr>
                    <th>Date</th>
                    <th>Adresse IP</th>
                    <th>Statut</th>
                </tr>
                <tr>
                    <td>2025-05-07 10:23</td>
                    <td>192.168.1.24</td>
                    <td>Succès</td>
                </tr>
                <tr>
                    <td>2025-05-06 22:45</td>
                    <td>192.168.1.87</td>
                    <td>Échec</td>
                </tr>
                <tr>
                    <td>2025-05-06 21:10</td>
                    <td>10.0.0.5</td>
                    <td>Succès</td>
                </tr>
            </table>
        </div>

        <div class="card">
            <h2>Données personnelles stockées</h2>
            <ul>
                <li>Numéro de carte (chiffré) : 8176 9287 8167 1234</li>
                <li>Adresse : 12 rue des Lilas, 75000 Paris</li>
                <li>Téléphone : +33 6 12 34 56 78</li>
            </ul>
        </div>
    </main>
</body>
</html>
