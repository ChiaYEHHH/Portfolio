<h1>創意飲品徵求大會</h1>

<h4>親愛的創意家們:<br>

    我們即將舉辦一場飲料創意徵集活動，邀請大家一同參與！歡迎你們發揮創意發明全新飲品口味以及配料搭配。投稿截止後，我們將舉行內部投票和隨機10位顧客品評，選出三名最具創意的作品。得獎者將有機會獲得飲品卡一年份以及3000元獎金！<br>
    <br>
    活動詳細規則如下：<br>
    <br>
    作品徵集期間：即日起至8月31日。<br>
    投稿方式：請將你的創意設計及說明填寫至下方表格。<br>
    公布名單時間：9月10日。<br>
    讓我們一起創造更多美味和驚喜，期待你的精彩創意！
</h4>
<form action="./api/save.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">

        <label for="creative" class="form-label">創意飲品名稱</label>
        <input type="text" class="form-control" name="drinksname" id="creative" placeholder="創意名稱" required>
    </div>
    <div class="mb-3">
        <label for="creativeDetail" class="form-label">創意飲品秘密配方</label>
        <textarea class="form-control" name="details" id="creativeDetail" rows="3" required></textarea>
    </div>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="contributor" placeholder="Creator Name" aria-label="Creator Name" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="mobile" placeholder="Phone Number" aria-label="Phone Number" required>
        </div>
        <div>
            <input type="hidden" name='updated' value="<?= date('Y-m-d'); ?>">
            <input type="hidden" name='table' value="creatives">
            
        </div>
    </div>
    <div class="text-center m-3">
        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        <button type="reset" class="btn btn-lg btn-primary">Reset</button>
    </div>

</form>