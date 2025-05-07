# 🛡️ Défi Cybersécurité - Application Web

## 🔧 Ce qu’il faut savoir avant de commencer

Avant de te lancer, assure-toi de comprendre ou d’avoir installé :

- 💻 HTML et JavaScript
- 🐘 PHP et MySQL
- 🌐 Les bases de HTTP (méthodes, en-têtes, etc.)
- 🍪 Les sessions et cookies
- 🗂️ La gestion des droits de fichiers
- 🧰 Un environnement de développement comme :
  - LAMP, MAMP, ou XAMPP  
  - ou bien Apache + PHP (avec extensions) + MySQL installés séparément

📘 Aide utile : [Configurer PHP et MySQL avec Apache (guide officiel)](https://www.php.net/manual/en/install.unix.debian.php)

---

## 🎯 Objectif

Apprendre à **trouver** des failles de sécurité dans une application web, puis à **les corriger**.  
Chaque défi a deux parties :  
1. 🎭 Attaque  
2. 🛡️ Défense

---

## 🔓 Les Défis

| 💥 Attaque | 🧰 Défense |
|------------|------------|
| **MySQL Injection** : Se connecter sans identifiants | Utiliser des **requêtes préparées** |
| **XSS (Cross-site scripting)** : Rediriger vers un autre site | **Échapper** les balises HTML |
| **CSRF (Cross-site request forgery)** : Faire une action à l’insu d’un utilisateur | Ajouter un **jeton CSRF** |
| **Brute Force** : Deviner login et mot de passe | Ajouter un **CAPTCHA** |
| **Information Disclosure** : Récupérer le fichier `.env` | **Cacher** ou protéger ce fichier avec un **routeur** |
| **File Upload** : Envoyer un fichier PHP malveillant | *(À toi de corriger cette faille !)* |

---

## 🚀 Comment lancer un défi

### 1. Exécuter la migration

Dans chaque projet, un fichier de **migration** est fourni. Lance-le pour créer la base de données.

```bash
php migration-up.php
```

### 2. Démarrer le serveur

Deux options :

✅ **Option rapide (sans Apache)**  
Dans le dossier du fichier `index.php`, exécute :

```bash
php -S localhost:8081
```

🌍 Option classique avec Apache
Place le contenu du projet dans le bon dossier Apache (ex : htdocs pour XAMPP).