<?php
	require_once "functions.php";

	$strikethrough = $_GET['strikethrough'];
	$item_id = $_GET['item_id'];


	if($strikethrough == '0'){
		$strikethrough = '1';
	}
	else{
		$strikethrough = '0';
	}

	$query = "UPDATE `groceries`.`items` SET `strikethrough` = '$strikethrough' WHERE `item_id` = '$item_id'";

	$db->query($query);

	header("location:index.php");
?>