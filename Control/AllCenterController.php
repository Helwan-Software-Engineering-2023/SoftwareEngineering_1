<?php
session_start();
    include "../Models/Vaccination_center.php";
    $vaccinationCenters= new Vaccination_center ();

    $result=$vaccinationCenters->vaccination_centers();
    $num=$vaccinationCenters->count();
    $_SESSION["centers"]=$result;
    $_SESSION["num"]=$num;
    header ("location: ../Views/Vaccination_center.php");
    // exit ();
    // print_r($result);
?>