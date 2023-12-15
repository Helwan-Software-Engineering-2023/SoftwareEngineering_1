<?php
include "../Models/Admin.php";
if($_POST["city"]){
    $city = $_POST["city"];

    $user=new Admin();

    $true=$user->AddCity($city);
    if($true){
        header("location: ../Views/Main.php");
    }else{
        header("Location: ../Views/AddCity.php");
}
}

?>