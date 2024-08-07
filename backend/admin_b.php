<!-- LOGO -->
<div class="row justify-content-center mt-5">
    <label class="input-group-text mb-3 justify-content-center">LOGO</label>
    <a class="btn btn-info" href="?do=logo_b">編輯</a>
    
    <img class=" mt-3" src="./logo/<?= $logos[0]['img'] ?>" style='width: 300px;'>


</div>

<!-- 訂單 -->
<div class="row justify-content-center mt-5">
    <label class="input-group-text mb-3 justify-content-center">訂單</label>
    <a class="btn btn-info" href="?do=order_b">編輯</a>
    <table class="table table-hover mt-3 text-center">
        <thead>
            <tr>
                <td>取貨日期</td>
                <td>品項&數量</td>
                <td>金額</td>
                <td>顧客姓名 / 電話</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $order = $Orders->all();
            foreach ($order as $key => $value) :
            ?>
                <tr>
                    <td><?= $value['pickuptime'] ?></td>
                    <td><?= $value['variety'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td><?= $value['name'] . " / " . $value['mobile']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- 創意投稿 -->
<div class="row justify-content-center mt-5">
    <label class="input-group-text mb-3 justify-content-center">創意投稿</label>
    <a class="btn btn-info" href="?do=creative_b">編輯</a>
    <table class="table table-hover mt-3 text-center">
        <thead>
            <tr>
                <td>創意名稱</td>
                <td>調配細節</td>
                <td>投稿者 / 電話</td>
                <td>投稿日期</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $creative = $Creatives->all();
            foreach ($creative as $key => $value) :
            ?>
                <tr>
                    <td><?= $value['drinksname'] ?></td>
                    <td><?= $value['details'] ?></td>
                    <td><?= $value['contributor'] . " / " . $value['mobile']; ?></td>
                    <td><?= $value['updated'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- 最新消息 -->
<div class="row justify-content-center mt-5">
    <label class="input-group-text mb-3 justify-content-center">最新消息</label>
    <a class="btn btn-info" href="?do=news_b">編輯</a>
    <table class="table table-hover mt-3 text-center">
        <thead>
            <tr>
                <td width="30%">標題</td>
                <td width="70%">內容</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $news = $News->all(['sh' => 1]);
            foreach ($news as $key => $value) :
            ?>
                <tr>
                    <td><?= $value['title'] ?></td>
                    <td class="text-start"><?= $value['article'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- 員工 -->
<div class="row justify-content-center mt-5">
    <label class="input-group-text mb-3 justify-content-center">員工</label>
    <a class="btn btn-info" href="?do=staff_b">編輯</a>
    <table class="table table-hover mt-3 text-center">
        <thead>
            <tr>
                <td>姓名</td>
                <td>電話</td>
                <td>能力</td>
                <td>帳號</td>
                <td>密碼</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $staff = $Staffs->all();
            foreach ($staff as $key => $value) :
            ?>
                <tr>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['mobile'] ?></td>
                    <td><?= $value['ability'] ?></td>
                    <td><?= $value['acc'] ?></td>
                    <td><?= $value['pw'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>