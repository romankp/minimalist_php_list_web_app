		<main>
			<div class="sub" id="items">

				<?php
					$query = "SELECT * FROM `items` ORDER BY `priority` DESC, `entry` ASC"; //id's the info from database
					$result = $db->query($query); // communicates with the info to actually provide it as mysql 
					
					while($row = $result->fetch_array()){
						
						$priority = $row['priority']; // Stores a particular value in the array. In this case for, for each row brought in by the while loop.
						$strikethrough = $row['strikethrough'];


						if($priority == "2"){
							$pr_class = "high-pr";
						}
						elseif($priority == "1"){
							$pr_class = "norm-pr";
						} 
						else{$pr_class = "low-pr";}


						if($strikethrough == 1){
							$strike_mark = "class='strike'";
						}
						else{
							$strike_mark = "";
						}


						echo '<div class="item ' . $pr_class . ' clear">';

							echo '<h4>';
								echo "<span " . $strike_mark . ">" . strtoupper($row['entry']) . "</span>";
							echo '</h4>';

							echo '<p>';
								echo $row['description'] . "<br>";
								echo "amount: " . $row['quantity'] . "<br>";
							echo '</p>';

							echo '<div class="clear">';
								echo '<a href="strikethrough.php?strikethrough=' . $strikethrough . '&item_id=' . $row['item_id'] . '"><i class="fa fa-strikethrough"></i></a>';
								echo '<a href="delete.php?item_id=' . $row['item_id'] . '"><i class="fa fa-trash-o"></i></a>';
							echo '</div>';
						echo '</div>';
					}
				?>

			</div>
		</main> <!-- End Main -->