<?php include_once "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>DRINK BAR</title>
</head>

<body>
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
                        <a class="nav-link" aria-current="page" href="?do=news">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            下拉選單
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">飲料</a></li>
                            <li><a class="dropdown-item" href="#">蛋糕</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">預約特製</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?do=creative">Creative</a>
                    </li>
                    <div class="nav pe-0">
                        <div class="nav-item">
                            <a class="nav-link" href="login.php"><i class="bi bi-cart4">login</i></a>
                        </div>
                        <div class="nav-item">
                            <button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'">login</button>
                        </div>

                    </div>


                </ul>
            </div>
        </div>
    </nav>
    <!-- 旋轉圖片 -->
    <div class="container">

        <div id="carousel" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/course3.jpg" class="d-block w-100 carousel_Img img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/course2.jpg" class="d-block w-100 carousel_Img img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/course1.jpg" class="d-block w-100 carousel_Img img-fluid" alt="...">
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
    <!-- news -->
    <div class="container mt-3" id="news">
        <div class="row justify-content-around">
            <?php
            $news = $News->all(['sh' => 1]);
            foreach ($news as $n) {
                echo "<div class='col-3 card overflow-hidden' style='height: 160px;'>";
                echo "<h5 class='card-title text-center' style='color:rgb(66, 170, 153);font-weight:bold;'>{$n['title']}</h5>";
                echo "<div class='card-text'>";
                echo "<p>{$n['article']}</p>";
                echo "</div>";
                echo "</div>";
            }

            ?>
        </div>
    </div>
    <!-- news end -->
    <!-- main -->
    <div class="container mt-3">
        <?php

        $do = $_GET['do'] ?? 'main';
        $file = "./front/{$do}.php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./front/main.php";
        }

        ?>
    </div>
    <!-- main end -->

    <!-- footer -->
    <footer class="navbar navbar-expand-lg mt-3">
        <div class="container">
            <a class="navbar-brand" href="#">DrinkBar</a>
            <span class="navbar-item">
                DrinkBar designer ChiaYEH
            </span>

        </div>
    </footer>
    <!-- login form -->
    <div id="id01" class="modal">

        <form class="modal-content animate">

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" id="acc" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="pw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <style>
        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #880000;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 25% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</body>

</html>
<script>
    function login() {
        $.post("./api/chk_login.php", {
            acc: $('#acc').val(),
            pw: $('#pw').val()
        }, (chk) => {
            if (chk == 1) {
                alert("登入成功")
                location.href = "admin.php";
            } else {
                alert("帳號密碼錯誤");
                location.reload();
            }
        })
    }
</script>