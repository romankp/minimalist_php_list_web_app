<?php
	require_once "functions.php"; 
	
	$query = "SELECT * FROM `user`"; //id's the info from database
	$result = $db->query($query); // communicates with the info to actually provide it as mysql 
	$row = $result->fetch_array(); // converts mysql to php info (an array in this case)
	$name = $row['firstname'];
	$uppername = strtoupper($name);

	if(substr($uppername, -1) == "S"){
		$apos = "'";
	}
	else{
		$apos = "'S";
	}
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $uppername . $apos ?> LIST</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="script.js" type="text/javascript"></script>
</head>

<body class="list">
	<div id="container">
		<header>
			<div class="sub">
				
					<?php
						$name = $row['firstname'];
						
						if(strlen($name) >= "8" && strlen($name) <= "14"){
							$style = ' style="font-size:9vw;"';
						}
						elseif(strlen($name) > "14" && strlen($name) <= "18"){
							$style = ' style="font-size:6.7vw;"';
						}
						elseif(strlen($name) > "18" && strlen($name) <= "22"){
							$style = ' style="font-size:4.7vw;"';
						}
						elseif(strlen($name) > "22"){
							$style = ' style="font-size:3.5vw;"';
						}
						else{'';}
						//This guy here dynamically changes the size of the header based on the length of the user's name. Note that the else statement is the default, not what happens after 22 letters.
					?>

				<h1<?php echo $style;?>>
					<span id="user-header"><?php echo $uppername . $apos;?></span>list
				</h1> <!-- Brings in the user's first name and the appropriate apostrophe, all into the header -->
			
			</div>
		</header> <!-- End Header -->