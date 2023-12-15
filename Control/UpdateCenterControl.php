<?php
session_start();
include("../Models/Admin.php");

if(!empty($_POST["name"]))
{
        
        $name = $_POST["name"];
        
        $admin=new Admin();
        $admin->updateVaccinationCenter($_SESSION['update_center_id'],$name);
        
       header("location: ../Control/AllCenterController.php");

    }



?>