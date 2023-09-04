<?php
include "./generic_functions.php";
// include "./User.php";

/**
 *  spl_autoload_register
 *Elle permet de charger automatiquement les classes.Elle prend en param une fonction et en argument une classe
 */
spl_autoload_register(function ($class_name) {
require $class_name . ".php";
});


$x = "User";
$u1 = new $x(); //pareil à $u1 = new User();

// var_dump($u1);
// dd($u1);


//L'opérateur d'objet (->)

// echo $u1->nom;
// echo $u1->prenom;
$u1->present();

echo User::pieds;//2
?>