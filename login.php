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
<style>
    #login .row {
        height: 60vh;
        /* justify-content: center; */
    }

    #bgi img {
        width: 100%;
        /* height: 100%; */

        /*background-image: url(./images/bgi.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;*/
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        bottom: 50%;
        left: 50%;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 500px;
        padding: 10px;
        background-color: white;
    }
</style>

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
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./front/login.php"><i class="bi bi-cart4"></i></a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-info open-button" onclick="openForm()">Open Form</button>
                        </li>
                    </ul>


                </ul>
            </div>
        </div>
    </nav>

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
    <!-- login -->
    <div class="container mt-4" id="login">
        <div class="row justify-content-center">
            <!-- Carousel -->
            <div id="bgi" class="col-8 carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="./images/bgi01.jpg" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="./images/bgi02.jpg" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="./images/bgi03.jpg" alt="" class="d-block w-100">
                    </div>
                </div>
            </div>
            <!-- login form -->
            <div class="col-4 p-5">
                <h2>DrinkBar</h2>
                <form>
                    <div class="form-floating mb-3">
                        <input type="account" class="form-control" name="floatingInput" id="acc">
                        <label for="floatingInput">Account</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" name="floatingPassword" id="pw">
                        <label for="floatingPassword">Password12645</label>
                    </div>
                    <div class="checkbox mt-2 mb-3">
                        <label><input type="checkbox">Remember</label>
                    </div>

                    <button onclick="login()" type="button" class="btn btn-secondary">Submit</button>
                    <button onclick="clear()" type="reset" class="btn btn-secondary"> Clear </button>
                </form>
            </div>
        </div>
    </div>
    <!-- login end -->
    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    <!-- footer -->
    <footer class="navbar navbar-expand-lg mt-3">
        <div class="container">
            <a class="navbar-brand" href="#">DrinkBar</a>
            <span class="navbar-item">
                DrinkBar designer ChiaYEH
            </span>

        </div>
    </footer>

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