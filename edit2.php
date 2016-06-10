<?php
	require_once "functions.php";

	$entry = $db->escape_string($_POST['entry']);
	$description = $db->escape_string($_POST['description']);
	$priority = $db->escape_string($_POST['priority']);
	
	$item_id = $db->escape_string($_POST['item_id']);

	if($entry == ""){
		echo "Please enter a new item name or title.";
		echo "<a href='index.php'>GO BACK</a>";
	}
	else{
		$query = "UPDATE `groceries`.`items` SET `entry` = '$entry', `description` = '$description', `priority` = '$priority' WHERE `item_id` = '$item_id'";

		$db->query($query);

		header("location:index.php");
	}