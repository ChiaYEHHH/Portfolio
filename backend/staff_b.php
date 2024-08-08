<div class="container text-center">
    <label class="input-group-text mb-3 justify-content-center">員工</label>
    <a class="btn btn-info w-50" href="">編輯</a>
    <div class="row justify-content-center mt-3">
        <table class="table table-hover  text-center">
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
                        <td><?= str_repeat("*",mb_strlen($value['pw'])); ?></td>
                        <td>
                            <?php
                            if($value['acc'])
                        ?>
                            </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>