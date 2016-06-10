<?php 
	require_once "functions.php";
	//using $row from list.php which includes this file
?>
		<div class="edit_bar clear">

			<form class="edit_form" method="post" action="edit2.php">
				<input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
				<input type="text" name="entry" value="<?php echo $row['entry']; ?>">
				<input type="text" name="description" value="<?php echo $row['description']; ?>">
				<select name="priority">
					<?php 
						if($priority == "2"){
							echo '<option value="0">Low Priority</option>';
							echo '<option value="1">Normal Priority</option>';
							echo '<option value="2" selected>High Priority</option>';
						}
						elseif($priority == "1"){
							echo '<option value="0">Low Priority</option>';
							echo '<option value="1" selected>Normal Priority</option>';
							echo '<option value="2">High Priority</option>';
						} 
						else{
							echo '<option value="0" selected>Low Priority</option>';
							echo '<option value="1">Normal Priority</option>';
							echo '<option value="2">High Priority</option>';
						}
					?>
				</select>
				<input type="submit" value="EDIT">
			</form> <!-- End Edit Form -->

			<div class="edit_icons clear">
				<a href="strikethrough.php?strikethrough=<?php echo $strikethrough;?>&item_id=<?php echo $row['item_id'];?>"><i class="fa fa-strikethrough"></i></a>
				<a href="delete.php?item_id=<?php echo $row['item_id'];?>"><i class="fa fa-trash-o"></i></a>
			</div> <!-- End Edit Icons -->

			<div class="edit_bar_left">
			</div>

			<div class="edit_bar_right">
			</div>

		</div> <!-- End Edit Bar -->
	