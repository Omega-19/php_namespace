<?php

//récupérer la session

session_start();
//On teste si la variable de "login" existe et contient une valeur
if (empty ($_SESSION["login"])) {
    # si inexistante ou nulle, o n redirige vers le formulaire
    header("HTTP/1.1 302 Found");
    header("Location : /authentificated.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
<a href="/logout.php">Se déconnecter</a>
<h1>Bienvenue <?= $_SESSION["login"] ?? "....." ?> </h1>
</body>
</html>