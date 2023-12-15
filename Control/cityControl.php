<?php

session_start();

include "../Models/Admin.php";

$admin=new Admin();

$_SESSION["cityes"]=$admin->getCites();
$_SESSION["cityNum"]=$admin->count();


header("location: ../Views/AddCenter.php");



?>