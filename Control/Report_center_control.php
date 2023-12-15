<?php 
if(isset($_POST['submit']))
{
    include("./include/DatabaseClass.php");
    $db = new database();

    $sql = "insert into reports (name , description) values ('".$_POST["name"]."','". $_POST['center'] . " : " .$_POST['feedback2'] ."')";
    $db->insert($sql);

    print_r($_POST);
    
}

header("location: ../Views/Main.php");
?>