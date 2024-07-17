<div class="row justify-content-center">
    <div class="col-2 bg-info">
        
    </div>
    <div class="col-2 bg-info">
        取貨日期
    </div>
    <div class="col-2 bg-warning">
        品項
    </div>
    <div class="col-1 bg-primary">
        金額
    </div>
    <div class="col-2 bg-danger">
        顧客姓名
    </div>
    <div class="col-1 bg-primary">
        顧客電話
    </div>
    <div class="col-1 bg-success">
        編輯/刪除
    </div>
</div>


<div class="row text-center">
<?php
$order = $Order->all();
foreach ($order as $key => $value) {
echo "<div class='col-2'>{$value['id']}</div>";
echo "<div class='col-2'>{$value['pickuptime']}</div>";
echo "<div class='col-2'>{$value['variety']}</div>";
echo "<div class='col-1'>{$value['price']}</div>";
echo "<div class='col-2'>{$value['name']}</div>";
echo "<div class='col-2'>{$value['mobile']}</div>";
echo "<div class='col-1'><input type='checkbox' name='del' id='{$value['id']}'><button type='button'>編輯</button></div>";
}

?>

</div>