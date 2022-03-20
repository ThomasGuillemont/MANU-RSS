<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="\public\assets\css\style.css" rel="stylesheet">
    <link href="/public/assets/css/styleCards.css" rel="stylesheet">
    <link href="/public/assets/css/style404.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../public/assets/img/MELT.png" type="image/x-icon">
    <title>MELT Technologies - Toutes les actualités de la tech</title>
</head>
<body>

<div id="nav">
    <nav class="navbar-light bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-2">
                    <a class="navbar-brand" href="#"><img class="mb-3" id="logo" src="/public/assets/img/MELT.png"
                            alt="logo MELT"></a>
                </div>
                <div class="col-10 text-center">
                    <p id="headMessage">Opppss...</p>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="container" id="mainContainer">
    <div class="row">
        <div class="col d-flex align-items-center justify-content-end flex-column mt-4">
            <img id="robot" src="/public/assets/img/icons8-broken-robot-50.png" alt="Robot broken - Page not found">
                <h1>404</h1>
            <h2>Page not found</h2>
        </div>

    </div>
</div>

<?php
include(dirname(__FILE__) .'./views/templates/footer.php');
?>