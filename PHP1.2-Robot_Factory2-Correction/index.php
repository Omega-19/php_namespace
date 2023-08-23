<?php

/**
 * Voici une solution possible pour notre nouvelle génération de robots.
 *
 * ----
 *
 * La première chose à faire était de découper notre code en de multiples
 * fichiers. Notez que nous avons bien séparé la logique PHP du template
 * HTML.
 *
 * Il reste certes un peu de PHP dans le HTML, mais il est purement
 * voué à de l'affichage : des `if` inline, quelques `echo`, etc. Aucune
 * logique lourde, seulement du business d'affichage. C'est ce qu'on appelle
 * une view, ou simplement une vue en français.
 *
 * Le fichier index.php a ici une fonction de contrôleur. Il agence la logique
 * lourde contenue dans les fichiers de fonctions annexes et les vues. Il a
 * un rôle de charnière entre la logique PHP et l'affichage HTML.
 *
 * Nous avons donc ici un début de découpage VC, pour View-Controller. Peu
 * à peu nous nous rapprocherons du but final d'une application web classique :
 * le MVC. Le M de MVC viendra bientôt. (:
 *
 * ----
 *
 * Concernant la récupération du nom saisi par l'utilisateur, le code parle
 * de lui-même. On vérifie si $_POST['name'] existe et n'est pas vide :
 * si c'est le cas on met cette valeur dans la variable $robotName, sinon
 * on génère un nom aléatoire.
 *
 * ----
 *
 * Posez autant de questions que nécessaire à vos formateurs. Comprendre ces
 * bases est très important pour la suite. L'architecture MVC et l'utilisation
 * des formulaires sont des notions fondamentales en web.
 */

// We don't have to generate a robot if the user has not submitted the
// form. It would be a waste of resources since the user won't see it
// anyway.
if (!empty($_POST)) {

    // We require our functions neatly separated into multiple files.
    require './functions/generic_functions.php';
    require './functions/robot_functions.php';

    // We handle user's input. If the user has submitted a name, we use it.
    // Else, we fallback to our good old random name generation.
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $robotName = $_POST['name'];
    } else {
        $robotName = generateRandomRobotName(2, 4, '-');
    }
    $reversedName = reverseString($robotName);

    $date = date('d m Y');
    $hour = date('H:i:s');

    $randomNumber = generateRandomNumber(1, 10);
    if (isNumberEven($randomNumber)) {
        $parityMsg = 'pair';
    } else {
        $parityMsg = 'impair';
    }

    if (isRobotEvil(0.33334)) {
        $robotMoralDecision = 'Extermination ! Extermination !';
    } else {
        $robotMoralDecision = 'Vous voulez un café ?';
    }
}

require 'views/homepage.phtml';
