<?php require_once "functions.php";?>
		<main>
			<div id="items">

				<?php
					$user_id = $_SESSION['user']['user_id'];

					$query = "SELECT * FROM `items` WHERE `user_id` = '$user_id' ORDER BY `priority` DESC, `entry` ASC"; //id's the info from database that belongs to a particular user

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
								echo $row['description'];
							echo '</p>';

						echo '</div>';

						include "edit.php";
					}
				?>

			</div>
		</main> <!-- End Main -->