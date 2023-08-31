
 ## MySQLi(MySQL Improved) et PDO(PHP Data Objects) en PHP: 
 Sont des extensions php permettant aux developpeur d'interagir avec les bases de données relationnelles; telles que MySQL, SQLite, PostgreSQL........
 `MySQLi ` est spécifiquement conçu pour MySQL.
 `PDO ` est plus générique et prend en charge plusieurs types de bases de données.

## Connexion avec PDO
Pour utiliser PDO, il faut plus ou moins 5 étapes

1. Créer une connexion à la BDD
    ````PHP
    /**
     * DSN : Data Source Name est une chaîne de caractère utilisée pour identifier et spécifier la BDD
     */
    $dsn = "mysql:host=localhost;dbname=album_app_mvc; charset=utf8mb4";
    $db_username = "root";
    $db_password = "";


    $pdo = new PDO($dsn, $username, $password);
    ````
2. Exécuter une requête
````php
$sql:"SELECT * FROM `users`"
````
3. Récupérer les données
4. Fermer la connexion

