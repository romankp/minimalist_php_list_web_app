<?php
	require_once "functions.php";

	$entry = $db->escape_string($_POST['entry']);
	$description = $db->escape_string($_POST['description']);
	$priority = $db->escape_string($_POST['priority']);

	$user_id = $_SESSION['user']['user_id'];
	
	if($entry == ""){
		header("location:index.php?error=entry");
	}
	else{
		$query = "INSERT INTO `groceries`.`items` (`entry`,`description`,`priority`,`user_id`) VALUES ('$entry','$description','$priority','$user_id')";

		$db->query($query);

		header("location:index.php");
	}