<?php
session_start();

include "../Models/Vaccination_center.php";

$user=new Vaccination_center();

$result=$user->showAll($_SESSION['id']);

$num=$user->count();

$_SESSION["center_users"]=$result;
$_SESSION["center_users_num"]=$num;

// print_r($result);
header("location: ../Views/CenterUsers.php");


?>