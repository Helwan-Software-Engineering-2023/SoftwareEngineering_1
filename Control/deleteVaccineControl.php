<?php
include "../Models/Admin.php";

if(!empty($_GET["id"])){
    $id = $_GET["id"];

    $user=new Admin();

    $true=$user->DeleteVaccine($id);
    if($true){
        header("location: ../Control/ListVaccineControl.php");
    }else{
        $param="false";
        header("location: ../Views/AllVaccines.php?id=$param");
    }
}
?>