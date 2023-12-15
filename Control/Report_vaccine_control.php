<?php 
if(isset($_POST['submit']))
{
    include("./include/DatabaseClass.php");
    $db = new database();

    $sql = "insert into reports (name , description) values ('".$_POST["name"]."','". $_POST['vaccine'] . " : " .$_POST['feedback'] ."')";
    $db->insert($sql);

    
}

header("location: ../Views/Main.php");
?>