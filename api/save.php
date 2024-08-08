<?php
include_once "base.php";
dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};
unset($_POST['table']);

$db->save($_POST);

switch ($do) {
    case 'orders':
    case 'creatives':
        to("../index.php");
        break;

    case 'news':
    case 'staffs':
        to("../admin.php");
        break;
}
