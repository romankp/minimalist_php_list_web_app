<?php require_once "functions.php";?>		

		<nav>
			<div class="sub clear">
				<ul>
					<li><a>Login</a>
						<form id="login-drop" method="post" action="login2.php">
							<input type="text" name="username" placeholder="Username">
							<input type="password" name="password" placeholder="Password">
							<input type="submit" value="Enter">
						</form>
					</li>
					<li><a>Register</a>
						<form id="register-drop" method="post" action="register2.php">
							<input type="text" name="firstname" placeholder="First Name">
							<input type="text" name="lastname" placeholder="Last Name">
							<input type="text" name="username" placeholder="Username">
							<input type="password" name="password" placeholder="Password">
							<input type="password" name="password2" placeholder="Retype Password">
							<input type="submit" value="Submit">
						</form>
					</li>
				</ul>
			</div>
		</nav>

	</div>
</body>
</html>