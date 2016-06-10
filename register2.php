<?php
	require_once "functions.php";

	$firstname = $db->escape_string($_POST['firstname']);
	$lastname = $db->escape_string($_POST['lastname']);
	$username = $db->escape_string($_POST['username']);
	$password = $db->escape_string($_POST['password']);
	$password2 = $db->escape_string($_POST['password2']);

	if($firstname == "" || $lastname == "" || $username == "" || $password == "" || $password2 == ""){
		// echo "Please complete all registration fields.";
		// echo "<a href='index.php'>GO BACK</a>";
		header("location:index.php?error=incomp_reg");
	}
	else{
		$query = "SELECT * FROM `users` WHERE `username` = '$username'";

		$result = $db->query($query);
		$row_cnt = $result->num_rows;

		if($row_cnt == 1){
			// echo "Username unavailable. Please choose another.";
			// echo "<a href='index.php'>GO BACK</a>";
			header("location:index.php?error=username");
		}
		elseif($password != $password2){
			// echo "Passwords do not match. Please try again.";
			// echo "<a href='index.php'>GO BACK</a>";
			header("location:index.php?error=passwords");
		}
		else{
			$query2 = "INSERT INTO `groceries`.`users` (`firstname`,`lastname`,`username`,`password`) VALUES ('$firstname', '$lastname', '$username', '$password')";

			$db->query($query2);

			$query3 = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

			$result2 = $db->query($query3);
			$row = $result2->fetch_array();

			$_SESSION['user'] = $row;

			header("location:index.php");
		}
	}