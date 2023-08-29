<?php

//On a bien demander à télécharger un fichier
if (isset($_GET['file']) && !empty($_GET['file'])) {
    # code...
    $filePath = "./upload/" . $_GET['file'];
//si le fichier existe
    if (file_exists($filePath)) {
        # Définir les en-têtes pour forcer le téléchargement du  fichier
//Indique que le contenu du fichier est de type binaire et que le navigateur doit traiter le fichier comme un téléchargement plutôt que de l'afficher dans le navigateur
        header("Content-Type : application/octet-stream");
        
        //upload /monimage.png
        header("Content-Disposition: attachment; filename= " . basename($filePath));
        header("Content-Length : " . filesize($filePath));

        //Lire et afficher le contenu du fichier
        readfile($filePath);
    }else {
        # afficher un message d'erreur
        echo "le fichier n'existe pas";
    }
    echo $filePath;
}
?>