<?php
include('config.php');
session_start();

if(isset($_SESSION['logged_in'])){
	$user_check = $_SESSION['username'];
	$ses_sql = mysqli_query($db,"select username from user where username = '$user_check' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['username'];
	$logged_in = TRUE;
} else{
	$logged_in = FALSE;
}
?>