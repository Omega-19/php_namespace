<?php

// Definition des constantes

define("LOGIN", "toto");
define("PASSWORD", "nIcolasAmrod");
//variable qui stocke les erreurs

$errorMessage = "";



/**
 * $_SERVER contient les informations sur 
 * le serveur WEB
 * L'environnement d'exécution et les requêtes http
 */
// echo "<pre>";
// print_r($_SERVER);
//  print_r($_REQUEST);//Affiche les paramètres que l'utilisateur a soumis ainsi qu'une clé que le serveur lui a attribué
// echo "</pre>";

//Test de l'envoi du formulaire

if (!empty($_POST)) {
    //les identifiants sont transmis

    if (!empty($_POST["login"]) && !empty($_POST["pwd"])) {
        # Comparaison des identifiants fournis par rapport à ceux enregistrer dans la bdd
        if ($_POST["login"] !== LOGIN) {
            $errorMessage = "Mauvais login !";
        }elseif ($_POST["pwd"] !== PASSWORD) {
            $errorMessage = "Mauvais  mot de passe !";
        }else {
            # ouvrir une session
            session_start();
            //On enregistre le login de session
            $_SESSION["login"] = LOGIN;
            //On redirige vers le fichier admin.php
            header("HTTP/1.1 302 Found");
            header("Location: /admin.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
</head>
<body>
    <!-- php_self renvoie le nom du fichier
    TOUjours mettre html qd on utilise php_self pour la sécurité
htmlspecialchars permet d'échaper les caractères speciaux 
nulle
-->

<h1>Bienvenue <?= $_SESSION["login"] ?? "....." ?> </h1>
    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <fieldset>
                <legend>Identifiez-vous</legend>
                <?php if(!empty($errorMessage)) : ?>
                    <p>
                        <?= $errorMessage ?>
                    </p>
                    <?php endif; ?>
                <p>
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login">
                </p>
                <p>
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" name="pwd" id="pwd" >
                </p>
                <p>
                    <button type="submit" name="submit">S'authentifier</button>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>