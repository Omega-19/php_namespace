1--La liste de tous les utilisateurs

SELECT * FROM `users`;

2--La liste de tous les users rangée par noms de famille

SELECT *
 FROM `users` 
 ORDER BY `last_name`;

3--Le dernier user inscrit

SELECT * 
FROM `users` 
ORDER BY `id` 
DESC LIMIT 1;

4--La liste de tous les utilisateurs fêtant leur anniversaire ce mois-ci ;

SELECT `birthdate` FROM `users` WHERE `birthdate` LIKE `%-08-%`;

<!-- SELECT * 
    FROM users 
    WHERE birthdate
    BETWEEN "2023-08-01 00:00:00" 
    AND "2023-08-31 23:59:59" -->


5--Le nombre total d'utilisateurs ;

SELECT COUNT(*) FROM `users`;

6--La liste de tous les utilisateurs associés à leurs villes respectives ;

SELECT * 
 FROM `users` 
 FULL OUTER JOIN `addresses` ON `users`.ID = `addresses`;

 La liste de tous les utilisateurs vivant à une adresse sans numéro ;
SELECT` users.last_name `
FROM `users `
INNER JOIN `addresses `
ON `users.id = addresses.user_id`
WHERE `addresses.number IS NULL`;
La liste de tous les produits dont le prix est supérieur à 1 000 € ;
SELECT * 
FROM `products` 
WHERE `price > 1000.00`; 
La liste de tous les produits associés à leurs photos respectives ;
SELECT `url`
FROM `products` 
INNER JOIN `pictures` 
ON `products.id = pictures.product_id`;
La liste de tous les produits appartenant à la catégorie « Voyage » ;
SELECT * 
FROM `products` 
INNER JOIN `products_categories` ON `products.id = products_categories.product_id`
INNER JOIN `categories` ON `products_categories.category_id =categories.id`
WHERE `title = 'Voyage'`;
La liste de tous les utilisateurs ayant effectué plus de dix commandes ;
SELECT * FROM `Users`;
La liste de tous les produits achetés par le premier utilisateur inscrit.
SELECT * FROM `Users`;
