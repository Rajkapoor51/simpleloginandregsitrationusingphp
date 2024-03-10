<?php require("connection.php")?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="register.css">
	</link>
	<title>Simple Website</title>

</head>

<body>
	<div class="header">
		<a href="#default" class="logo">NewSite</a>
		<div class="header-right">
			<a href="#home">Home</a>
			<a href="#contact">Contact</a>
			<a href="#about">About</a>
		</div>
		</div>

		<form class="container" method="POST" action="login_register.php">
			<div class="main">
				<h1>Registration Page</h1>
				<hr>
				<label>Name</label>
				<input type="text" placeholder="Enter Name" name="name"></input><br>
				<label>Date of Birth</label>
				<input type="date" name="dob"></input><br>
				<label>Email</label>
				<input type="email" placeholder="Enter Email" name="email"></input><br>
				<label>Password</label>
				<input type="password" placeholder="Enter Password" name="password"></input><br>
				<label>Country</label>
				<select name="country">
					<option>India</option>
					<option>America</option>
					<option>Japan</option>
					<option>China</option>
				</select><br>
				<div class="wrap">
					<button type="submit" name="register">
						Submit
					</button>
				</div>
				<div>
					<p>Already have an account? <a href="login.php">Sign in</a>.</p>
				</div>
			</div>
		</form>
		<?php
		?>
</body>

</html>