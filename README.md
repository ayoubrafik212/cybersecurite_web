Pré-recquis :
- HTML / Javascript
- MySQL
- PHP
- Notions de HTTP (méthodes, en-têtes, statelessness)
- Connaissances de base sur les sessions et cookies
- droit de fichier ?
- Disposer d'un environnement de développement comme LAMP, MAMP, XAMPP ou disposer de apache et mysql sans LAMP, MAMP ou XAMPP

Défis (défi : attaque | défense) : 
- injection MySQL : Se loger sans les credentials | Préparer les requêtes
- injection XSS : Rediriger le site vers un autre | Echapper les balises html
- attaque CSRF : Faire réaliser une action à l'insu de l'utilisateur | Jeton CSRF
- bruteforce : Trouver le login et mot de passe | Ajouter un CAPCHA
- Information Disclosure : Récupérer le .env | Mis en place d'un routeur ou sécuriser le .env
- File Upload Vulnerability : Envoyer un fichier PHP malicieux 