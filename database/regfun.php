<?php
include 'config.php';

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == True){
	header("location: dashboard.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email_id = mysqli_real_escape_string($db,$_POST['email_id']);
	$phone = mysqli_real_escape_string($db,$_POST['phone']);
	$password = mysqli_real_escape_string($db,$_POST['password']); 

	$sql_INSERT = "INSERT into user (name, username, password, email_id, phone) values( '$name', '$username', '$password', '$email_id', '$phone' )";
	$result_insert = $db->query($sql_INSERT);

	if($result_insert) {
		$sql_SELECT = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
		$result_select = $db->query($sql_SELECT);
		$row = $result_select->fetch_assoc();
		$_SESSION['username'] = $row["username"];
		$_SESSION['username'] = $row["username"];
		$_SESSION['email_id'] = $row["email_id"];
		$_SESSION['phone'] = $row["phone"];
		$_SESSION['logged_in'] = True;
		header("location: index");		
	}else {
		$error = "Registration Failed";
	}
}
?>