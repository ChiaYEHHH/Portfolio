<?php include_once "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/cwtexyen.css">
    <title>DRINK BAR</title>
    <style>

    </style>
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- logo -->
            
            <img class="navbar-brand inline img-fluid" width="280px" src="./images/logo/logo09.png" alt="" srcset="">
            <div class="collapse navbar-collapse inline" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
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
                            <li><a class="dropdown-item" href="#drink">飲料</a></li>
                            <li><a class="dropdown-item" href="#cake">蛋糕</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">預約特製</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?do=creative">Creative</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"><i class="bi bi-cart4"></i></a>
                    </li>

                </ul>
            </div>
            <div class="nav-item me-0">
                <button type="button" class="btn btn-info inline" aria-current="page" onclick="openForm()">Login</button>
            </div>
        </div>

    </nav>
    <!-- nav end -->
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
    <!-- 旋轉圖片end -->
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
    <div id="modal_login" class="modal">
        <form class="modal-content animate">
            <h1>Sign Up</h1>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" id="acc" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="pw" required>

                <button onclick="login()" type="button">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="closeForm()" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <style>
        .modal {
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* The Modal (background) */
        #modal_Login {
            display: none;
            /* Hidden by default */
            position: fixed;
            justify-content: center;
            align-items: center;
            /* Stay in place */
            overflow: hidden;
            z-index: 10;
            /* Sit on top */
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 12% auto 15% auto;
            border: 1px solid #888;
            width: 60%;
            position: relative;
            box-shadow: 0 20px 20px rgba(0, 0, 0, 0.5);
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
            background-color: rgb(198, 226, 189);
            ;
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
    </style>
</body>

</html>
<script>
    function openForm() {
        document.getElementById("modal_login").style.display = "block";
    }

    function closeForm() {
        document.getElementById("modal_login").style.display = "none";
    }

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