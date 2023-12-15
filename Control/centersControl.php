<?php
session_start();
if(isset($_SESSION['id'])){
    include "../Models/User.php";

$user=new user();
$res=$user->getCenters($_SESSION['CityId']);
$num=$user->count();
$result=$user->getVaccine();
$num2=$user->count();
$_SESSION["centers"]=$res;
$_SESSION["vaccine"]=$result;
$_SESSION["number"]=$num;
$_SESSION["number2"]=$num2;
header("location: ../Views/reserve.php");
// print_r($result);
// echo $num;
// echo $num2;
}

?>