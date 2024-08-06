<!-- sql -->
<!-- 旋轉圖片 -->
<div class="container">

    <div id="carousel" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/course3.jpg" class="d-block w-100 carousel_Img img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/course2.jpg" class="d-block w-100 carousel_Img img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/course1.jpg" class="d-block w-100 carousel_Img img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- 旋轉圖片end -->
<div class="row mt-3 justify-content-around">
    <?php
    $news = $News->all(['sh' => 1]);
    foreach ($news as $n) :
    ?>
        <div class='col-3 card overflow-hidden' style='height: 160px;'>
            <h5 class='card-title text-center' style='color:rgb(66, 170, 153);font-weight:bold;'><?= $n['title']; ?></h5>
            <div class='card-text'>
                <p><?= $n['article']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<form class=" mt-5">
    <h2>LOGO</h2>
    <!-- <label class="input-group-text mb-3">logo</label> -->
    <hr>
    <div class='row mt-3 justify-content-end'>
        <div>上傳LOGO圖片：<input class="mb-3 bg-secondary" type="file" name="img" id="imgFile"></div>
        <div>
            <button id="uploadBtn" class="btn btn-primary" type="button" onclick="upload()">新增</button>
            <button class="btn btn-danger" type="reset">清除</button>
        </div>
        <!-- <div class="col-2">
            
        </div> -->
    </div>
</form>
<form>
    <div class='row mt-3'>
        <table class="table table-success text-center">
            <thead>
                <tr>
                    <th class="p-3" width="60%">LOGO img</th>
                    <th class="p-3" width="10%">顯示</th>
                    <th class="p-3" width="10%">刪除</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $logos = $Logos->all();
                foreach ($logos as $key => $value) :
                ?>
                    <tr style="vertical-align: middle; text-align: center;">
                        <td><img src="./images/logo/<?= $value['img']; ?>" style='height: 60px;'></td>
                        <td><input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <button class="btn btn-primary" type="button">修改</button>
            <button class="btn btn-danger" type="reset">重置</button>
        </div>
    </div>
</form>

<!-- INSERT INTO `bar_logos` (`id`, `img`, `sh`) VALUES (NULL, 'logo07.png', '1'); -->

<script>
    $(document).ready(function() {

    })

    function upload() {
        // console.log($('#imgFile'));
        // var formData = new FormData();
        // 获取文件对象并附加到FormData对象中
        var file = $('#imgFile')[0].files[0];
        var formData = new FormData();
    formData.append('img', file);
        // formData.append('img', file);
        // console.log('file',file);
        // console.log('formData',formData);


        // 通过Ajax发送POST请求
        $.ajax({
            url: './api/upload.php', // 后端处理文件上传的API地址
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                // 请求成功后的回调函数
                // console.log('文件上传成功');
                console.log(res);
                // },
                // error: function(xhr, status, error) {
                //     // 请求失败后的回调函数
                //     console.error('文件上传失败', error);
            }
        });
    }
</script>