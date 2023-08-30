<?php

//récupérer la session

session_start();
//On teste si la variable de "login" existe et contient une valeur
if (empty($_SESSION["login"])) {
    # si inexistante ou nulle, o n redirige vers le formulaire
    header("HTTP/1.1 302 Found");
    header("Location : /login.php");
    exit();
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
    <title>Ma page profile</title>
</head>

<body class="bg-dark text-white m-4">
    <header>
        <div class="row">
            <img class="col-sm-12" src="beautiful-nature-441853_1920.jpg" alt="img"></div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mon profil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="page_accueil.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Se déconnecter</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1 class="text-center fs-1">Bienvenue
                <?= $_SESSION["login"] ?? "....." ?>
            </h1>
        </div>
        <h2>MY WRITING..................</h2>
        <div  class="row">
                <div class="col-sm-4"><img class="img-fluid" src="img/cat-7523894_1920.jpg" alt=""></div>
                <div class="col-sm-4"><img class="img-fluid" src="img/horses-2904536_1920.jpg" alt=""></div>
                <div class="col-sm-4"><img class="img-fluid" src="img/thé.jpg" alt=""></div>

        </div>
        <div class="d-flex flex-sm-row bg-success-subtle border border-2 p-4 text-dark">
            <section class="sect1 bg-warning-subtle p-3 border border-black border-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate natus, nihil tempora
                    exercitationem quas sit nisi quod est ea, facere mollitia. Architecto soluta expedita delectus?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate natus, nihil tempora
                    exercitationem quas sit nisi quod est ea, facere mollitia. Architecto soluta expedita delectus?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate natus, nihil tempora
                    exercitationem quas sit nisi quod est ea, facere mollitia. Architecto soluta expedita delectus?</p>
            </section>
            <section class="sect2 bg-info-subtle p-3 border border-black border-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium praesentium alias quos
                    magni! Doloribus reprehenderit quod minus laborum voluptatibus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium praesentium alias quos
                    magni! Doloribus reprehenderit quod minus laborum voluptatibus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium praesentium alias quos
                    magni! Doloribus reprehenderit quod minus laborum voluptatibus?</p>

            </section>
            <section class="sect3 bg-info bg-gradient border border-black border-4 p-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium praesentium alias quos
                    magni! Doloribus reprehenderit quod minus laborum voluptatibus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium praesentium alias quos
                    magni! Doloribus reprehenderit quod minus laborum voluptatibus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium praesentium alias quos
                    magni! Doloribus reprehenderit quod minus laborum voluptatibus?</p>

            </section>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>