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

		<form class="container_login" method="POST" action="login_register.php">
			<div class="main">
				<h1>Login Page</h1>
				<hr>
				<label>Email</label>
				<input type="email" placeholder="Enter Email" name="email"></input><br>
				<label>Password</label>
				<input type="password" placeholder="Enter Password" name="password"></input><br>
				<div class="wrap">
					<button type="submit" name="login">
						Login
					</button>
				</div>
				<div>
					<p>Not Registered? <a href='register.php'>Register</a>.</p>
				</div>
			</div>
		</form>
		<?php
		?>
</body>

</html>