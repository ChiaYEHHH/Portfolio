<label class="input-group-text  mb-3">創意投稿</label>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-3 bg-info">
            創意飲品名稱
        </div>
        <div class="col-5 bg-danger">
            創意飲品配方
        </div>
        <div class="col-2 bg-primary">
            投稿者
        </div>
        <div class="col-2 bg-success">
            投稿日期
        </div>
    </div>
    <!-- sql -->
    <?php
    $row = $Creatives->all();
    foreach ($row as $key => $value) :
    ?>
        <div class='row text-center'>
            <div class='col-3'><?= $value['drinksname']; ?></div>
            <div class='col-5'><?= $value['details']; ?></div>
            <div class='col-2'><?= $value['contributor'];?> / <?= $value['mobile']; ?></div>
            <div class='col-2'><?= $value['updated']; ?></div>

        </div>
    <?php endforeach; ?>

</div>