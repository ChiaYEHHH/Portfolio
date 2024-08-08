<?php
include_once "./base.php";

// dd($_FILES);


if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../logo/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}


// $_POST['img']->save($_POST);
$Logos->save($_POST);
// dd($_POST);
to("../admin.php?do=logo_b");
