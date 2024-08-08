<?php include_once "./api/base.php";

if ($_SESSION['login'] != 1) {
    header("location:./index.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>DRINK BAR 後台</title>
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- logo -->
            <?php
            $logos = $Logos->all(['sh' => 1]);
            ?>
            <a href="index.php"><img class="navbar-brand inline img-fluid" width="280px" src="./logo/<?= $logos[0]['img'] ?>" alt="" srcset=""></a>
            <div class="collapse navbar-collapse inline" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="admin.php">Manage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?do=news_b">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?do=logo_b">Logos</a>
                    </li>
                </ul>
            </div>
            <div class="nav-item me-0">
                <a type="button" class="btn btn-info inline" href="./api/logout.php" aria-current="page">Logout</a>
            </div>
        </div>

    </nav>
    <!-- nav end -->

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
            <a class="navbar-brand" href="#">DrinkBar</a>
            <span class="navbar-item">
                DrinkBar designer ChiaYEH
            </span>
            <span class="navbar-item">
                datasource:Pinterest.com/Freepik.com/Design.com
            </span>

        </div>
    </footer>
</body>