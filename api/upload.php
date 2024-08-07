<?php
include_once "./base.php";

dd($_FILES);

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../logo/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// if ($do == 'admin') {
//     unset($_POST['pw2']);
// }

// unset($_POST['table']);
// $db->save($_POST);

// to("../admin.php?do=logo_b");
