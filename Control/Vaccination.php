<?php

    session_start();
    include("../Models/User.php");
    if (!empty($_POST['Vaccine_name']) && !empty($_POST['Vaccinatio_center'])&&!empty($_POST['Type_of_dose'])&&!empty($_POST['startDate'])){
        $vaccineName=$_POST['Vaccine_name'] ;
        $vaccination_center=$_SESSION['id'];
        $type_of_dose = $_POST['Type_of_dose'];
        $startDate=$_POST['startDate'];
        $center_id=$_POST['Vaccinatio_center'];
        $user=new user();
        // echo "test1";
        $result=$user->reserveVaccine($vaccineName,$vaccination_center,$startDate,$type_of_dose,$center_id) ;
        if($result){
        header ("location: ../Control/profileControl.php");

    }
    else{
        header("location: ../Views/reserve.php");
    }

    }
?>