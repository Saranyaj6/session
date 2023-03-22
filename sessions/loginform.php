<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<h2>Login Form</h2>
	<form method="post" action="login.php">
		<input type="text" name="username" placeholder="username" required><br>
		<input type="password" name="password" placeholder="password" required><br>
		<button type="submit">Login</button>
	</form>
	<p>Don't have an account <a href="/sessions/registration.php"> sign up</a></p>
</body>
</html>
