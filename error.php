<?php

$error = $_GET['error'];

if ($error == "login") {
	echo '<div id="err_login" class="error active">';
		echo '<p>The username or password is incorrect. Please try again.</p>';
		echo '<div class="err_button">';
			echo '<i class="fa fa-undo"></i>';
		echo '</div>';
	echo '</div>';
} elseif ($error == "incomp_login") {
	echo '<div id="err_login" class="error active">';
		echo '<p>Please complete both username & password fields.</p>';
		echo '<div class="err_button">';
			echo '<i class="fa fa-undo"></i>';
		echo '</div>';
	echo '</div>';
} elseif ($error == "incomp_reg") {
	echo '<div id="err_login" class="error active">';
		echo '<p>Please complete all registration fields.</p>';
		echo '<div class="err_button">';
			echo '<i class="fa fa-undo"></i>';
		echo '</div>';
	echo '</div>';
} elseif ($error == "username") {
	echo '<div id="err_login" class="error active">';
		echo '<p>The username entered is unavailable. Please try another.</p>';
		echo '<div class="err_button">';
			echo '<i class="fa fa-undo"></i>';
		echo '</div>';
	echo '</div>';
} elseif ($error == "passwords") {
	echo '<div id="err_login" class="error active">';
		echo '<p>The passwords entered do not match.<br>Please enter matching passwords.</p>';
		echo '<div class="err_button">';
			echo '<i class="fa fa-undo"></i>';
		echo '</div>';
	echo '</div>';
} else {
	echo '<div id="err_login" class="error">';
		echo '<p>Unknown error. Please try again.</p>';
		echo '<div class="err_button">';
			echo '<i class="fa fa-undo"></i>';
		echo '</div>';
	echo '</div>';
}