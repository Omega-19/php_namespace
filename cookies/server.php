<?php

require("./generic_fonctions.php");

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

    #Fonction qui sauvegarde le fichier à l'endroit désiré
    move_uploaded_file($tmpDir, "./upload/img-upload-" . time() . ".".$fileExtension);
    // sauvegarder le fichier sur le serveur
    
}else {
    // echo "pas de fichiers uploadés";
    
    //rediriger ce dernier sur la page du formulaire
 header("Location: /index.php?erro=no_files_uploaded");
    exit;
}
?>