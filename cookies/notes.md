## La spécification participe à la rapidité de la réponse de la requête

## La liste de tous les utilisateurs

SELECT * FROM `users`;

## La liste de tous les users rangée par noms de famille

SELECT *
FROM `users` 
ORDER BY `last_name`;

## Le dernier user inscrit

SELECT * 
FROM `users` 
ORDER BY registration_date 
DESC LIMIT 1;

## La liste de tous les utilisateurs fêtant leur anniversaire ce mois-ci ;
<!-- ceci passe quand dans la consigne on spécifie l'année -->
<!-- SELECT * FROM `users` 
WHERE birthdate 
BETWEEN "2023-08-01" AND "2023-08-31"; -->

<!-- la requête ideale pour des consignes du genre -->
SELECT * FROM `users`
WHERE MONTH(birthdate) = MONTH(NOW());

<!-- ceci correspond à notre contexte -->
SELECT * FROM `users` 
WHERE birthdate 
LIKE %-08-%;


<!--Autres options
 SELECT * 
    FROM users 
    WHERE birthdate
    BETWEEN "2023-08-01 00:00:00" 
    AND "2023-08-31 23:59:59" -->


## Le nombre total d'utilisateurs ;

SELECT COUNT(*) 
FROM `users`;
<!-- Les deux formes passent -->
SELECT COUNT(id) 
FROM `users`;

## La liste de tous les utilisateurs associés à leurs villes respectives ;
<!-- Le résultat attendu -->

SELECT users.first_name, users.last_name, addresses.city 
    FROM users, addresses
    WHERE users.address_id = addresses.id;

<!-- JOIN nous permet d'afficher les deux tables ainsi que leur contenus -->

<!-- 1ere méthode possible-->

SELECT users.first_name, users.last_name, addresses.city 
    FROM users
    INNER JOIN addresses 
    ON addresses.user_id = users.id;

<!-- 2e méthodes possible-->

SELECT users.first_name, users.last_name, addresses.city 
    FROM users
   JOIN addresses 
    ON addresses.user_id = users.id;

## La liste de tous les utilisateurs vivant à une adresse sans numéro ;

SELECT users.first_name,users.last_name,addresses.number
FROM users
INNER JOIN addresses ON addresses.user_id = users.id
WHERE addresses.number IS NULL;

<!-- seconde méthode -->

SELECT users.first_name, users.last_name
FROM users, addresses
WHERE users.id = user_id AND addresses.number IS NULL;
    
    
## La liste de tous les produits dont le prix est supérieur à 1 000 € ;

SELECT * FROM `products` WHERE `price` > 1000.00;

<!-- seconde méthode -->

SELECT products.name, products.price
FROM  products
WHERE  products.price > 1000;
## La liste de tous les produits associés à leurs photos respectives ;

SELECT products.name, url
FROM products 
INNER JOIN pictures 
ON products.id = pictures.product_id;

<!-- Autre méthode -->

SELECT products.name, url
FROM products 
JOIN pictures 
ON products.id = pictures.product_id;

<!-- 3e méthode -->
SELECT pictures.product_id, products.name, url 
FROM pictures, products
WHERE pictures.product_id = products.id;

<!-- 3e méthode -->

SELECT products.name, url
FROM products, pictures
WHERE products.id = pictures.product_id;

## La liste de tous les produits appartenant à la catégorie « Voyage » ;
<!-- 1ere méthode -->

SELECT DISTINCT p.name, p.description, p.price, c.title
FROM products AS p, products_categories AS pc, categories AS c
WHERE p.id = pc.product_id
AND c.title = "voyage"
AND c.id = pc.category_id;

## La liste de tous les utilisateurs ayant effectué plus de dix commandes ;


SELECT
    users.first_name,
    COUNT(orders.user_id) AS total
FROM
    users,
    orders
WHERE
    users.id = user_id
GROUP BY
    user_id
HAVING
    COUNT(orders.user_id) > 10
ORDER BY
    total
DESC;

## La liste de tous les produits achetés par le premier utilisateur inscrit.

SELECT p.name, p.description, p.price
    FROM ((products_orders AS po
    INNER JOIN products AS p
    ON po.product_id = p.id)
    INNER JOIN orders AS o 
    ON po.order_id = o.id)
    WHERE o.user_id =
    (SELECT users.id 
    FROM users
    ORDER BY users.registration_date LIMIT 1)


<!-- COUNT, AVERAGE, MAX, MIN -->
On utilise des alias pour changer l'affichage d'un résultat ('AS') est le clé utilisé pour;


<!-- QUELQUES COMMANDES UTILES -->
 ## SHOW DATABASES
 <!-- pour la creation de bd débutant-->
 ## CREATE DATABASE app_music;
<!-- creation de bd pro -->
 ## create DATABASE  app_music character set utf8mb4 COLLATE utf8mb4_unicode_ci;

 <!-- suit de commande de creation -->

 ## CREATE DATABASE app_music CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

 ## CREATE TABLE albums ( id INT (11) PRIMARY KEY AUTO_INCREMENT, ref CHAR(10) NOT NULL, name VARCHAR(50) NOT NULL, title VARCHAR(50) NOT NULL, description TEXT DEFAULT NULL, duration INT, LIKES ENUM ('COOL', 'MUCH', 'Great') );

 ## INSERT INTO `albums` VALUES( NULL, 'KG-757', 'Lara Fabian', 'TOMORROW IS A LIE', "L'album dansant des années 1952", 125, 'Cool' );

 <!-- pour la suite une création de table -->

CREATE TABLE test (
    id INT(11) NOT NULL AUTO_INCREMENT,
    a INT(11) NOT NULL,
    b INT(11) UNSIGNED ZEROFILL NOT NULL,
    c INT(5) DEFAULT NULL,
    d INT(5) UNSIGNED ZEROFILL NOT NULL, 
    e INT(5) DEFAULT NULL, 
    PRIMARY KEY (`id`)
);
<!-- Le zerofill met le nombre fichier a faire apparaitre -->

<!-- autre manière pour créer le tableau -->

CREATE TABLE albumList(
    id INT AUTO_INCREMENT,
    album_id INT,
    list VARCHAR(100),
    PRIMARY KEY(`id`),
    CONSTRAINT idx_albums_albumList FOREIGN KEY (`album_id`) REFERENCES albums(`id`)
    );

 <!-- pour la suppression d'une bd -->
 ## DROP DATABASE app_music;

 ## AJOUT DUNE CLE

 <!-- ALTER TABLE albumlist ADD CONSTRAINT fk_albums_albumlist FOREIGN key (album_id) REFERENCES albums(id); -->


 <!-- Primary key -->
il faut mettre les syntaxes qui suivent:

# ALTER TABLE Persons ADD PRIMARY KEY (ID);

# ALTER TABLE Persons ADD CONSTRAINT PK_Person PRIMARY KEY (ID,LastName);

<!-- foreign key -->

# ALTER TABLE Orders ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);


# ALTER TABLE Orders ADD CONSTRAINT FK_PersonOrder FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

# ALTER TABLE Orders DROP FOREIGN KEY FK_PersonOrder;

CRUD
    <strong>VARCHAR</strong> remplace le string dans le remplissage d'une table en phpmyadmin.

    <strong>TEXT</strong> est préférable qd on doit utiliser une description par exemple dans le remplissage d'une table en phpmyadmin