<?php

include "../Models/Admin.php";

if(!empty($_POST["name"]) && !empty($_POST["gap"]) && !empty($_POST["description"]) && !empty($_POST["age"])){
    $name = $_POST["name"];
    $description = $_POST["description"];
    $gap= $_POST["gap"];
    $age= $_POST["age"];

    $user=new Admin();

    $true=$user->addVaccine($name,$gap,$description,$age);
    if($true){
        header("location: ../Control/ListVaccineControl.php");
    }else{
        header("Location: ../Views/AddVaccine.php");
    }
}

?>