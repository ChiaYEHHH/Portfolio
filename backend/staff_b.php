<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-2 bg-info">
            姓名
        </div>
        <div class="col-3 bg-danger">
            電話
        </div>
        <div class="col-2 bg-primary">
            能力
        </div>
        <div class="col-1 bg-success">
            編輯
        </div>
    </div>
    <!-- sql -->
    <?php
        $staff = $Staff->all();
        foreach ($staff as $key => $value) {
            echo "<div class='row text-center'>";
            echo "<div class='col-2'>{$value['id']}</div>";
            echo "<div class='col-2'>{$value['name']}</div>";
            echo "<div class='col-3'>{$value['mobile']}</div>";
            echo "<div class='col-2'>{$value['ability']}</div>";
            echo "<div class='col-1'><input type='checkbox' name='del' id='{$value['id']}'><button type='button'>編輯</button></div>";
            echo "</div>";
        }
        ?>
</div>