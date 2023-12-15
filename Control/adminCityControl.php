<?php

session_start();

include "../Models/Admin.php";

$admin=new Admin();

$_SESSION["admin_city"]=$admin->getCites();
$_SESSION["admin_city_num"]=$admin->count();

if(isset($_GET["center_id"]))
{
    $_SESSION['update_center_id'] = $_GET["center_id"];
}

header("location: ../Views/updateCenter.php");



?>