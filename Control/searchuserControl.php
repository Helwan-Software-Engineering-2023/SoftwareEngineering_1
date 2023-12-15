<?php
session_start();
if(!empty($_POST["date"])){
    include "../Models/Vaccination_center.php";
    $date = $_POST["date"];

    $user=new Vaccination_center();

    $result= $user->searchUser($date,$_SESSION['id']);
    $num=$user->count();

    $_SESSION["searched_users"]=$result;

    $_SESSION["users_number"]=$num;

    // print_r($result);

    header("location: ../Views/searchusers.php");

}else{
    header("location: ../Views/CenterUsers.php");
}

?>