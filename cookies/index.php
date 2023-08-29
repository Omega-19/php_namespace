<?php
require("./home.phtml");
phpinfo();
exit;
// session_save_path("C:/_programmes/laragon-6.0.0/tmp");

// #Fonction qui démarre une session côté serveur
// session_start();

// // if (empty($_SESSION["nom"])){
// //     $_SESSION["nom"] = "John Doe";
// // }

// // echo "<p> Hello {$_SESSION['nom']}</p>";

// // dd($_SESSION);
// // print_r($_SESSION);

// // #Fonction permettant de créer un cookie
// // //setcookie(clé, valeur, date_expiration);

// // setcookie("school", "Highfive", time() + 60 * 60);

// # Fonction qui nous dis où sont stochés les sessions côté serveur
// echo "Session Path = " . session_save_path();//qd c'est vide cela veut dire que que il est stoooooché dans un fichier par défaut
// echo "<br>";
// echo session_id();//fonction qui renvoie l'id de la session actuelle



// //$_cookie: superglobale permettant d'accéder aux cookies côté client

// $_SESSION["firstname"] = "Nicole";
// $_SESSION["lastname"] = "VIGAN";
// $_SESSION["AGE"] = 50;
// dd($_COOKIE);


// /**
//  * Une superglobale est une variable pré-définie qui stocke des infos
//  * et des données importantes accessibles depuis n'importe où dans le script PHP sans avoir besoin de la déclarer explicitement comme une variable classique
//  */

//  //données sérialisées
// $serializedData = 'firstname|s:6:"Nicole";lastname|s:5:"VIGAN";AGE|i:50;';

// //créer une nouvelle session si on en avait pas, ou récupérer l'ancienne session

// dd($_SESSION);
// //données réelles non sérialisées

// // $data =unserialize($serializedData);

?>
