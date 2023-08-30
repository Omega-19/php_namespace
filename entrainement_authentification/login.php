<?php

define("LOGIN", "MYGOSH");
define("PASSWORD", "1234");

$errorMessage = "";

if (!empty($_POST)) {
    if (!empty($_POST["login"]) && !empty($_POST["pwd"])) {
        if ($_POST["login"] !== LOGIN) {
            $errorMessage = "Ga vérifie ton login";
        } elseif ($_POST["pwd"] !== PASSWORD) {
            $errorMessage = "Mauvais pass réveille toi";
        } else {
            session_start();
            $_SESSION["login"] = LOGIN;
            header("HTTP/1.1 302 Found");
            header("Location: /Page_profile.php");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>Connexion</title>
    <style>
        body{
            background: url(img/beautiful-nature-3698073_1280.jpg);
        }
    </style>
</head>

<body class=" bg-info">
    <h1 class="shadow-lg bg-warning text-dark fwt-600 text-center">CONNECTE TOI ICI</h1>
    <div class="container">
        <form class="border border-5 m-3 p-4 text-white" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <fieldset class="mt-3">
                <legend>Identifiez-Vous en cliquant ici...</legend>
                <?php if (!empty($errorMessage)): ?>
                    <p>
                        <?= $errorMessage ?>
                    </p>
                <?php endif; ?>
                <p>
                <p>
                    <label for="login">Login here :</label>
                    <input type="text" name="login" id="login">
                </p>
                <p>
                    <label for="pwd">Mot de passe : </label>
                    <input type="password" name="pwd" id="pwd">
                </p>
                <p>
                    <button type="submit" name="submit"> Se connecter</button>
                </p>
            </fieldset>
        </form>
        </p>
    </div>

</body>

</html>