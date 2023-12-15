<?php
    session_start();
    include("../Models/Vaccine.php");
    $vaccine = new Vaccine();
    $result = $vaccine->vaccins() ;
    $num = $vaccine->count();
    $_SESSION['Vaccins']=$result;
    $_SESSION["no"]=$num;
    // print_r($result);
    header("location: ../Views/vaccine.php");




?>