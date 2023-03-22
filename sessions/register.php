<?php
session_start();

if(isset($_SESSION['username'])){
	header("Location: home.php");
	exit();
}

function savedetails(){
	$data = file_get_contents('users.json');
	$registrations = json_decode($data, true);

	if($_POST != null){
		$username = $_POST['username'];
		foreach($registrations as $reg){
			if($reg['username'] == $username){
				echo "<script>alert('Username already exit . Please choose different username.')</script>";
				return;	
			}
		}
		$register =[];
		$registration = array(
			'name' =>$_POST['name'],
			'phone' =>$_POST['phone'],
			'email' =>$_POST['email'],
			'username' =>$username,
			'password' => $_POST['password']

		);
		array_push($register, $registration);

		$data = json_encode($register, JSON_PRETTY_PRINT);

		file_put_contents('users.json', $data);
		// $_SESSION['username'] = $_POST['username'];
		header("Location: loginform.php");
	}
	else{
		echo "Registration Failed";
	}
}

if (file_get_contents('users.json')== null){
	file_get_contents('users.json', '[]');
}
savedetails();