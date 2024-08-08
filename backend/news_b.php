<!-- 首頁方塊 -->
<div class="row mt-3 justify-content-around">
    <?php
    $news = $News->all(['sh' => 1]);
    foreach ($news as $n) :
    ?>
        <div class="col p-2">
            <div class='card overflow-hidden p-2' style='height: 160px;'>
                <h5 class='card-title text-center' style='color:rgb(66, 170, 153);font-weight:bold;'><?= $n['title']; ?></h5>
                <div class='card-text'>
                    <p><?= $n['article']; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class='row mt-3'>
    <form action="./api/edit.php" method="post" enctype="multipart/form-data">
        <table class="table table-hover mt-3 text-center">
            <thead>
                <tr>
                    <td width="20%">標題</td>
                    <td width="60%">內容</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $news = $News->all();
                foreach ($news as $key => $value) :
                ?>
                    <tr>
                        <td style='color:rgb(66, 170, 153);font-weight:bold;'><?= $value['title'] ?></td>
                        <td class="text-start"><?= $value['article'] ?></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>
                    </tr>
                    <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <input type="hidden" name="table" value="news">
            <button class="btn btn-primary" type="submit">修改</button>
            <button class="btn btn-danger" type="reset">重置</button>
        </div>
    </form>
</div>
<br>
<hr class="mt-5">

<div class='row mt-3'>
    <form action="./api/save.php" method="post" enctype="multipart/form-data">
        <div class="mt-3">
            <label for="newsTitle" class="form-label">新增最新消息</label>
            <input type="text" class="form-control" name="title" id="newsTitle" placeholder="標題" required>
        </div>
        <div class="mb-3">
            <label for="article" class="form-label">消息內容</label>
            <textarea class="form-control" name="article" id="article" rows="3" placeholder="內容" required></textarea>
        </div>
        <div class="text-center">
            <input type="hidden" name="table" value="news">
            <input type="hidden" name="sh" value="0">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>