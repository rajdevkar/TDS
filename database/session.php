<?php
include('config.php');
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == True){
	$name = $_SESSION['name'];
	$ses_sql = mysqli_query($db,"select * from user where username = '$name' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['username'];
	$logged_in = TRUE;
} else{
	$logged_in = FALSE;
}
?>