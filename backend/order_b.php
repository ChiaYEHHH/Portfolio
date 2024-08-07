<label class="input-group-text mb-3 ">訂單</label>
<div class="row justify-content-center">
    <div class="col-1 bg-info">

    </div>
    <div class="col-2 bg-info">
        取貨日期
    </div>
    <div class="col-3 bg-warning">
        品項
    </div>
    <div class="col-1 bg-primary">
        金額
    </div>
    <div class="col-2 bg-danger">
        顧客姓名
    </div>
    <div class="col-2 bg-primary">
        顧客電話
    </div>
    <div class="col-1 bg-success">
        編輯/刪除
    </div>
</div>


<div class="row text-center">
    <?php
    $order = $Orders->all();
    foreach ($order as $key => $value) :
    ?>
        <div class='col-1'><?= $value['id']; ?></div>
        <div class='col-2'><?= $value['pickuptime']; ?></div>
        <div class='col-3'><?= $value['variety']; ?></div>
        <div class='col-1'><?= $value['price']; ?></div>
        <div class='col-2'><?= $value['name']; ?></div>
        <div class='col-2'><?= $value['mobile']; ?></div>
        <div class='col-1'>
            <button class="btn btn-sm btn-primary" type='button'>編輯</button>
            <button class="btn btn-sm btn-danger" type='button'>刪除</button>
        </div>
    <?php endforeach; ?>

</div>