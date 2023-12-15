<?php
session_start();
include "../Models/Vaccination_center.php ";
if (isset($_SESSION[""]) ){
    $date=$_SESSION[""];
    $vaccinationCenter = new vaccination_center();
    $result =  $vaccinationCenter->listUsers($date) ;
    $num=$vaccinationCenter->count();
    header("loction:");
}


?>