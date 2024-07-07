<?php include_once "./api/base.php"; ?>

<!-- nav -->
<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- nav 內容 -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="subnav">
                    <button class="subnavbtn">首頁 <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#LOGO">LOGO</a>
                        <a href="#CAROUSEL">CAROUSEL</a>
                        <a href="#NEWS">NEWS</a>
                        <a href="#FOOTER">FOOTER</a>
                    </div>
                </li>
                <li class="subnav"><a href="#PRODUCT">PRODUCT</a></li>
                <li class="subnav"><a href="#STAFF">STAFF</a></li>
                <li class="subnav"><a href="#ORDER">ORDER</a></li>

            </ul>
        </div>
    </div>
    <!-- <div class="navbar">
            <a href="#home">Home</a>
            <div class="subnav">
                <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="#company">Company</a>
                    <a href="#team">Team</a>
                    <a href="#careers">Careers</a>
                </div>
            </div>
            <div class="subnav">
                <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="#bring">Bring</a>
                    <a href="#deliver">Deliver</a>
                    <a href="#package">Package</a>
                    <a href="#express">Express</a>
                </div>
            </div>
        </div> -->
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
    <div class="row">
        <div class="col ">
            <img class="img-fluid" src="./images/course1.jpg" alt="" srcset="">
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <img class="img-fluid" src="./images/course1.jpg" alt="" srcset="">
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <img class="img-fluid" src="./images/course1.jpg" alt="" srcset="">
        </div>
    </div>
</div>
<?php

$do = $_GET['do'] ?? 'admin_b';
$file = "./backend/{$do}.php";
if (file_exists($file)) {
    include $file;
} else {
    include "./backend/admin_b.php";
}

?>
<!-- content end -->