<?php

session_start();
session_unset();

header("HTTP/1.1 302 Found");
header("Location : /page_accueil.php");
exit();
?>