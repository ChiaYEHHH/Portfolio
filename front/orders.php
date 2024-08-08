<h1>預定訂單</h1>

<h4>親愛的顧客們:<br>

歡迎光臨我們的甜點店！
我們為您準備了精緻的蛋糕、繽紛的杯子蛋糕和多樣化的飲品，讓您享受甜蜜時光。
無論是慶祝特別時刻，還是想要犒賞自己，我們的手作甜點和飲品都能滿足您的味蕾。
現在就下訂單，將幸福帶回家！
</h4>
<form action="./api/save.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="pickuptime" class="form-label">提貨日期</label>
        <input type="date" class="form-control" name="pickuptime" id="pickuptime" placeholder="提貨日期" required>
    </div>
    <div class="mb-3">
        <label for="variety" class="form-label">品項與數量</label>
        <textarea class="form-control" name="variety" id="variety" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">預算金額</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="預算金額" required>
    </div>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="mobile" placeholder="Phone Number" aria-label="Phone Number" required>
        </div>
        <div>
            <input type="hidden" name='table' value="orders">
            
        </div>
    </div>
    <div class="text-center m-3">
        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        <button type="reset" class="btn btn-lg btn-primary">Reset</button>
    </div>

</form>