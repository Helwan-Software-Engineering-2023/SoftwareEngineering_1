<?php
session_start();
include "../Models/User.php";
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $user=new User();
    $result= $user->getMyProfile($id);
    $num=$user->count();
    $_SESSION['reserved']=$result;
    $_SESSION['number']=$num;
    header('location: ../Views/myProfile.php');
    // print_r($result);
}

?>