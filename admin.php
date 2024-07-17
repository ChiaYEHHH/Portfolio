<?php include_once "./api/base.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>DRINK BAR 後台</title>
</head>
<!-- nav -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- logo -->
        <a class="navbar-brand" href="#">DrinkBar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="?do=news_b">News</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        首頁外觀
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?do=logo_b">LOGO</a></li>
                        <li><a class="dropdown-item" href="?do=banner_b">BANNER</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="?do=creative">Creative</a>
                </li>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart4"></i></a>
                    </li>
                </ul>


            </ul>
        </div>
    </div>
</nav>
<!-- nav end -->
<!-- carousel -->
<div class="container">
    <header>
        <div class="container-fluid">
            <div id="carousel" class="carousel slide mt-1" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="./images/course3.jpg" class="d-block w-100 carousel_Img" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img class="img-fluid" src="./images/course2.jpg" class="d-block w-100 carousel_Img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="./images/course1.jpg" class="d-block w-100 carousel_Img" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>
</div>
<!-- carousel end -->
<!-- content -->
<div class="container text-center">
    <?php

    $do = $_GET['do'] ?? 'admin_b';
    $file = "./backend/{$do}.php";
    if (file_exists($file)) {
        include $file;
    } else {
        include "./backend/admin_b.php";
    }

    ?>
</div>
<!-- content end -->

<!-- footer -->
<footer class="navbar navbar-expand-lg mt-3">
    <div class="container">
        <div class="navbar-brand">Drinkbar</div>
        <span class="navbar-text">
            DrinkBar designer ChiaYEH
        </span>

    </div>
</footer>