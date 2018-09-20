<?php

function Login(){   
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']); 

	$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	if($count == 1) {
		$_SESSION['username'] = $username;
		$_SESSION['email'] =  $row['email_id'];
		$_SESSION['logged_in'] = True;
		header("location: dashboard.php");
	}else {
		$error = "Your Login Name or Password is invalid";
		$_SESSION['logged_in'] = False;
	}
}

function Logout(){
	if(session_destroy()) {
		header("Location: ../index");
	}
}

?>