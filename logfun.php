<?php
include 'config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']); 

	$sql = "SELECT id FROM user WHERE username = '$username' and password = '$password'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	if($count == 1) {
		$_SESSION['login_user'] = $username;
		$_SESSION['logged_in'] = True;
		header("location: index");
	}else {
		$error = "Your Login Name or Password is invalid";
		$_SESSION['logged_in'] = False;
	}
}
?>