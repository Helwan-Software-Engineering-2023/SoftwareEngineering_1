<?php

    include '../Models/Admin.php';
    if(!empty($_POST['username']) && !empty($_POST["password"]) && !empty($_POST["name"]) && !empty($_POST["phone"])
    && !empty($_POST["Address"]) && !empty($_POST["city"]) && !empty($_POST["type"])){
        $email = $_POST["username"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $city = $_POST["city"];
        $Address= $_POST["Address"];
        $Phone_num= $_POST["phone"];
        $type= $_POST["type"];
        $role="vaccination_center";

        $admin=new Admin();
        $true=$admin->addVaccinationCenter($name,$email, $password, $city,$Phone_num, $Address , $role,$type);
        if($true){
            header("location: ../Control/AllCenterController.php");
        }else{
            header("location: ../Views/cityControl.php");
        }
    }



?>