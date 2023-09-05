<?php

include "./generic_functions.php";
 require "./app/User/User.php";
 require "./exercices/math_operations.php";
 require "./exercices/string_operations.php";

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

echo "<br>";
echo "<br>";

//NAMESPACE
use highfive\User;
use yes\Calculator;//permet d'éviter le namespace


$client1 = new User();
$admin1 =

new User();
echo strrev("Salut");

$v = 45;
$a = 50;
$hi = "Salutation";
$name = "Paola";
echo "<br>";

$client = new calcul\Calculator();
echo $client->concatenate("$hi", "$name");

echo "<br>";

$operation = new yes\Calculator();

echo $operation->add($v, $a);


?>