<?php
session_start();

if(!isset($_POST['username'])) {
	header("Location: home.php");
	exit();
}
	

function login(){
	$data = file_get_contents('users.json');
	$registrations = json_decode($data, true);

	if($_POST != null){
		$username = $_POST['username'];
		$password = $_POST['password'];
		foreach($registrations as $registration){
			if($registration['username'] == $username && $registration['password'] == $password) {
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $registration['email'];
				$registration['phone'] = $registration['phone'];
				$registration['name'] = $registration['name'];
				header("Location: home.php");
				exit();
			}
		}
		header("Location: loginform.php");
	}
	else{
		header("Location: loginform.php");
	}
}

login();