<?php
require "../app/views/AuthView.php";
require "../app/models/AuthModel.php";
require "../app/controller/AuthController.php";

/**
 * Le point d'entrée (également front controller) est 
 *un fichier PHP unique qui agit comme le point de départ de votre app web. Il reçoit toutes les requêtes HTTP entrantes et dirige le flux de controle vers les composants appropriés (contrôleurs, vues, modèles) en fonction de l'URL ou d'autres paramètres.
 */

$view = new AuthView();
$model = new AuthModel();
$controller = new AuthController($model);


var_dump($_GET); //me permet d'afficher la donnée renvoyée

if ($_GET["action"]) {
    //l'utilisateur veut s'inscrire
    if ($_GET["action"] === "signup") {
        # Appeler le controller approprié
        $controller->signupAction(
            $_POST["username"],
            $_POST["password"]
        );
    }
    //l'utilisateur veut se connecter
    if ($_GET["action"] === "login") {
        # Appeler le controller approprié
        $controller->loginAction(
            $_POST["username"]
        );
    }
} else {
    $view->showSignupForm();
    $view->showLoginForm();
}