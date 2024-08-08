<div class="container text-center">
    <label class="input-group-text mb-3 justify-content-center">員工名單</label>
    <form action="./api/edit.php" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center mt-3">
            <table class="table table-hover  text-center">
                <thead>
                    <tr>
                        <td>姓名</td>
                        <td>電話</td>
                        <td>能力</td>
                        <td>帳號</td>
                        <td>密碼</td>
                        <td>刪除</td>
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
                            <td><?= str_repeat("*", mb_strlen($value['pw'])); ?></td>
                            <td><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></td>
                            <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
                            <input type="hidden" name="table" value="staffs">
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div>
                <button class="btn btn-primary" type="submit">修改</button>
                <button class="btn btn-danger" type="reset">重置</button>
            </div>
    </form>
</div>
<br>
<hr class="mt-5">

<div class='row mt-3'>
    <h3 class="text-center">新增員工</h3>
    <form action="./api/save.php" method="post" enctype="multipart/form-data">
        <div class="mt-3">
            <label for="name" class="form-label">員工名稱</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="名稱" required>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">員工電話</label>
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="電話號碼" required>
        </div>
        <div class="mb-3">
            <label for="ability" class="form-label">專業能力</label>
            <textarea class="form-control" name="ability" id="ability" rows="3" placeholder="專業能力" required></textarea>
        </div>
        <div class="mt-3">
            <input type="text" class="form-control" name="acc" id="acc" placeholder="帳號" required>
            <input type="text" class="form-control" name="pw" id="pw" placeholder="密碼" required>
        </div>
        <div class="text-center">
            <input type="hidden" name="table" value="staffs">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>