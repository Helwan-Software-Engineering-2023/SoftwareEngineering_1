<?php
session_start();

include "../Models/Admin.php";

$admin=new Admin();

$result=$admin->listUsers();

$num=$admin->count();

$_SESSION['users']=$result;
$_SESSION['usersNum']=$num;

header('location: ../Views/UsersList.php');

?>