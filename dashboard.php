<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  href="register.css"></link>
    <title>Simple Website</title>
</head>
<body>
<div class="header">
		<a href="#default" class="logo">Dashboard</a>
		<div class="header-right">
			<a href="#home">Home</a>
			<a href="#contact">Contact</a>
			<a href="#about">About</a>
            <a class="active" href="logout.php">Logout</a>
		</div>
		</div>
    
</body>
</html>



<?php
session_start();


if(isset($_SESSION['logged_in'] )&& $_SESSION['logged_in']==true){
    echo "<h1>Welcome -$_SESSION[name] <br>
    $_SESSION[email] <br> $_SESSION[dob] <br>$_SESSION[country]</h1>";

}

?> 


