<?php
if(isset($_POST["submit"])){
    include '../Models/User.php';
    if(!empty($_POST['username']) && !empty($_POST["pass1"]) && !empty($_POST["name"]) && !empty($_POST["phone"])
    && !empty($_POST["Address"]) && !empty($_POST["city"]) && !empty($_POST["id"])){
        $email = $_POST["username"];
        $name = $_POST["name"];
        $password = $_POST["pass1"];
        $city = $_POST["city"];
        $Address= $_POST["Address"];
        $Phone_num= $_POST["phone"];
        $role="User";
        $id=$_POST["id"];

        $user=new User();  
        $true=$user->SignUp($name,$id,$email,$password,$city,$Phone_num,$Address,$role);
        if($true){
            header("location: ../Views/Login_page.php");
            exit ; // redirect to the login page
        }
        else{
            header("location: ../Views/signup.php"); 
            exit ;
            // stay in the same page with error message
        }
}
}

?>