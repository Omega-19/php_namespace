<?php

require("./generic_fonctions.php");

define("MAX_SIZE", 30000); 

//l'utilisateur à uploader un fichier

if (isset($_POST['submit']) && isset($_FILES['photo_profile'])) {

    // récupérer les informations du fichier (nom, extension, chemin)
    // dd("photo_profile");
    $fileName = $_FILES['photo_profile']['name'];
    $tmpDir = $_FILES['photo_profile']['tmp_name'];
    // echo "fileName = " .  $fileName;
    // echo "tmpDir = " .  $tmpDir;


    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    // echo "file extension = $fileExtension";
    //ne accepter que les fichiers de type jpeg, png, jpg
    // echo in_array("jpeg", ["png", "jpg"]);

    // if (in_array("jpeg", ["png", "jpg"])) {
    //     echo "bon files";
    // } else {
    //     echo " Fichiers $fileExtension non autorisés !";
    // }

    //autre possibilité 

    $allowedFiles = ["jpg", "png", "jpeg"];

    if (in_array($fileExtension, $allowedFiles)) {
        # vérifier qu'il n'y a pas d'erreurs
        if ($_FILES["photo_profile"]["error"] === 0) {
            # il n'ya pas d'erreur;
            if ($_FILES["photo_profile"]["size"] <= MAX_SIZE) {
                # La taille est inférieure à 3M
                $uploadDir = "./upload/";
                $newFileName = $uploadDir . uniqid("img-") . "." . $fileExtension;
                move_uploaded_file($tmpDir, $newFileName);
                echo "good";

            } else {
                # la taille est trop élevée
                echo "Fichier trop volumineux.";
            }
        } else {
            echo "une erreur a été rencontrée lors du chargement du fichier. Veuillez réessayer, svp....";
        }
        //vérifier la taille du fichier
    } else {
        echo "Fichiers $fileExtension non autorisé !<br>";
        echo "Formats autorisés: " . implode(",", $allowedFiles);
    }
    ;
    //Les valeurs false en 0 false, 0, -0,0, "", ,[],null,                                                             
    // sauvegarder le fichier sur le serveur
    #Fonction qui sauvegarde le fichier à l'endroit désiré
} else {

    //rediriger ce dernier sur la page du formulaire
    header('Location:/index.php?error=no_file_uploaded');
}
?>