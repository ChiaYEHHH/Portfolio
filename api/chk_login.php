<?php
include_once "./base.php";
$Staff = new DB('bar_staffs');

echo $Staff->count($_POST);

?>