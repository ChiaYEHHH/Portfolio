<?php
include_once "base.php";
$Staff = new DB('bar_staffs');
if($Staff->count($_POST)){
    $_SESSION['login']=1;
    echo $Staff->count($_POST);

}

?>