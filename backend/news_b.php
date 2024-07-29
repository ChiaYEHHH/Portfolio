<!-- sql -->
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
<div class="row mt-3 justify-content-around">
    <?php
    $news = $News->all(['sh' => 1]);
    foreach ($news as $n) :
    ?>
        <div class='col-3 card overflow-hidden' style='height: 160px;'>
            <h5 class='card-title text-center' style='color:rgb(66, 170, 153);font-weight:bold;'><?= $n['title']; ?></h5>
            <div class='card-text'>
                <p><?= $n['article']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class='row mt-3'>
    <?php
    $news = $News->all();
    foreach ($news as $key => $value) :
        ?>
        <div class="col-1 align-content-center"><?=$value['id'];?></div>
        <div class="col-2 align-content-center" style='color:rgb(66, 170, 153);font-weight:bold;'><?=$value['title'];?></div>
        <div class="col-8 align-content-center text-start"><?=$value['article'];?></div>
        <div class="col-1 align-content-center"><?=$value['sh'];?></div>
    <?php endforeach; ?>
</div>