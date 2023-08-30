<?php

//script de déconnexion

//récupère la session actuelle
session_start();
//supprime toutes les variables de sessions
session_unset();
session_destroy();
//redirection 
header("HTTP/1.1 302 Found");
header("Location : /authentificated.php");
exit();

?>