<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <h1>User Registration</h1>
    <form method="post" action="register.php">
        <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        </div>

        <div>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
        </div>

        <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        </div>

        <div>
		<label>Username:</label>
		<input type="text" name="username" required><br>
        </div>

        <div>
		<label>Password:</label>
		<input type="password" name="password" required><br>
        </div>

        <div>
		<button type="submit">Register</button>
        </div>
	</form>
</body>
</html>