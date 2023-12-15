<?php

session_start();

include "../Models/Admin.php";

$admin=new Admin();

$_SESSION["city"]=$admin->getCites();
$_SESSION["num"]=$admin->count();


header("location: ../Views/signup.php");



?>