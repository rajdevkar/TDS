<?php
include 'config.php';

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == True){
	header("location: dashboard.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']); 

	$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

	$result = $db->query($sql);
	$row = $result->fetch_assoc();

	$count = mysqli_num_rows($result);

	if($count == 1) {
		$_SESSION['name'] = $row["name"];
		$_SESSION['username'] = $row["username"];
		$_SESSION['email_id'] = $row["email_id"];
		$_SESSION['phone'] = $row["phone"];
		$_SESSION['logged_in'] = True;
		header("location: dashboard.php");
	}else {
		$error = "Your Login Name or Password is invalid";
		$_SESSION['logged_in'] = False;
	}
}
?>