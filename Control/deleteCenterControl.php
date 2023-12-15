<?php

include "../Models/Admin.php";

if(!empty($_GET["center_id"])){
    $id=$_GET["center_id"];

    $user=new Admin();

    $res=$user->deleteVaccinationCenter($id);
    if($res){
        header("location: ../Control/AllCenterController.php");
    }else{
        header("location: ../Views/Vaccination_center.php");
    }
}