<?php
session_start();
include "../Models/Admin.php";
if(!empty($_POST["search"])){
    $search = $_POST["search"];
    $user=new Admin();
    $result=$user->searchCenter($search);
    $num=$user->count();


    $_SESSION["searched"]=$result;
    $_SESSION["searchNum"]=$num;

    header("location: ../Views/search.php");
}else{
    header("location: ../Views/Vaccination_center.php");
}

?>