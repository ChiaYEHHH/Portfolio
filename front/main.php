<?php include_once "./api/base.php"; ?>
<style>
    .card a {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: skyblue;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card a:hover {
        opacity: 0.6;
        font-weight: bold;
    }
</style>

<!-- 卡片 菜單 -->
<div class="row justify-content-around mt-3">
    <?php
    $sale = $Sales->all();
    foreach ($sale as $key => $value) :
    ?>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
            <div class="card">
                <img src="./images/<?=$value['pic'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$value['title'];?></h5>
                    <p class="card-text">
                        Price:<?=$value['price'];?>
                    </p>
                    <p><button class="btn btn-info">Add Cart</button></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
</div>
<div class="CartBox">
<button type="button">Cart</button>
</div>