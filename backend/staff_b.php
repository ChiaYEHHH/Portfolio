<label class="input-group-text mb-3 ">員工</label>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-3 bg-info">
            姓名
        </div>
        <div class="col-3 bg-danger">
            電話
        </div>
        <div class="col-3 bg-primary">
            能力
        </div>
        <div class="col-1 bg-primary">
            帳號
        </div>
        <div class="col-1 bg-primary">
            密碼
        </div>
        <div class="col-1 bg-success">
        刪除/編輯
        </div>
    </div>
    <!-- sql -->
    <?php
    $staff = $Staff->all();
    foreach ($staff as $key => $value) :
    ?>
        <div class='row text-center'>
            <div class="col-3"><?= $value['name'] ?></div>
            <div class="col-3"><?= $value['mobile'] ?></div>
            <div class="col-3"><?= $value['ability'] ?></div>
            <div class="col-1"><?= $value['acc'] ?></div>
            <div class="col-1"><?= $value['pw'] ?></div>
            <div class="col-1">
                <input type="checkbox" name="del" id="<?= $value['id']; ?>">
                <button class="btn btn-sm btn-danger" type="button">編輯</button>
            </div>
        </div>

    <?php endforeach; ?>
</div>