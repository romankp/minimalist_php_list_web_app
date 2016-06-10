<?php
	require_once "functions.php";

	if(isset($_SESSION['user'])){
		include "header2.php";
		include "nav2.php";
		include "add.php";
		include "list.php";
		include "footer.php";
		include "error.php";
	}
	else{
		include "header1.php";
		include "nav1.php";
		include "error.php";
	}