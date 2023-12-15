<?php
session_start();

include "../Models/Admin.php";

$user=new Admin();

$result=$user->getVaccines();

$num=$user->count();

$_SESSION['vaccines']=$result;
$_SESSION['vaccinesNum']=$num;

header("location: ../Views/AllVaccines.php");

?>