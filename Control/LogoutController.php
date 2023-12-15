<?php 
		include '../Models/Person.php';
		$user = new Person();

		$user->logout();
		header("location: ../Views/Main.php");
	
?>
