<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: loginform.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <h1>home page</h1>
    <nav>
       <li><a href="/sessions/loginform.php">Login</a></li> 
       <li><a href="/sessions/registration.php">Sing up</a></li>
       <li><a href="/sessions/logout.php">Logout</a></li>
    </nav>
    <p>Welcome <?php  echo $username;?></P>
    <p> <?php echo "mail id :" .$email ;?></p>
    

</body>
</html>