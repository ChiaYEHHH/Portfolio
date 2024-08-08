<?php
include_once "base.php";
dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};
unset($_POST['table']);

$db->save($_POST);
to("../admin.php");
