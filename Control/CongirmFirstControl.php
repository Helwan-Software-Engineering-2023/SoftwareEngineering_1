<?php

include "../Models/Vaccination_center.php";

if(!empty($_GET["id"])){
    $id = $_GET["id"];

    $user=new Vaccination_center();

    $result=$user->ConfirmFirst($id);

    if($result){
        header("location: ../Control/listCenterUsers.php");
    }else{
        header("location: ../Views/userinfo.php");
    }
}

?>