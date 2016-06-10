<?php
	session_start();

	$db = new mysqli("localhost", "root", "root", "groceries");
	
	if($db->connect_errno){
		echo $db->connect_error;
	}