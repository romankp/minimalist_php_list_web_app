<?php require_once "functions.php";?>
		<div id="add_trigger">
			<i class="fa fa-plus"></i>
		</div><!-- End Add Trigger -->

		<div id="add_bar">
			<form id="add_form" method="post" action="add2.php">
				<input type="text" name="entry" placeholder="New Item">
				<input type="text" name="description" placeholder="Description">
				<select name="priority">
					<option value="0">Low Priority</option>
					<option value="1">Normal Priority</option>
					<option value="2">High Priority</option>
				</select>
				<input type="submit" value="ADD">
			</form><!-- End Add Form -->

			<div id="add_bar_left">
			</div>
		</div>