<?php
session_start();
include "../Models/Vaccination_center.php";

$user=new Vaccination_center();

$result=$user->getUserInfo($_SESSION['id']);

$num=$user->count();

$_SESSION["users_Info"]=$result;

$_SESSION["users_info_num"]=$num;

// print_r($result);

header("location: ../Views/userinfo.php");


?>