<?php 

if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == False){
	header("location: login.php");
}

?>