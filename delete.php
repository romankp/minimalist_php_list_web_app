<?php
	require_once "functions.php";

	$user_id = $_SESSION['user']['user_id'];
	$item_id = $_GET['item_id'];

	$query = "DELETE FROM `groceries`.`items` WHERE `item_id` = '$item_id' AND `user_id` = '$user_id'";

	$db->query($query);

	header("location:index.php");
?>