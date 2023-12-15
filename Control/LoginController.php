<?php 
		include '../Models/Person.php';
		
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$user = new Person(); // bykalm el models
			$true = $user->login($username, $password); 

			if ($true == true) {
					header("location: ../Views/Main.php");
			} else {
				$param = "false";
				header("location: ../Views/Login_page.php?id=$param"); 
			}
		}
	
	
?>
