<?php
include_once "base.php";
// dd($_POST);

$Creatives->save($_POST);
to("../index.php");
