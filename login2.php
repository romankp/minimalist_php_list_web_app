<?php
	require_once "functions.php";

	$username = $db->escape_string($_POST['username']);
	$password = $db->escape_string($_POST['password']);

	if ($username == "" || $password == "") {
		header("location:index.php?error=incomp_login");
	} else {
		$query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
	
		$result = $db->query($query);
		$row_cnt = $result->num_rows;
		
		if($row_cnt == 0){
			header("location:index.php?error=login");
		} else {
			$result = $db->query($query);
			$row = $result->fetch_array();

			$_SESSION['user'] = $row;

			header("location:index.php");
		}
	}