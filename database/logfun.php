<?php
include 'config.php';
include'functions.php';

session_start();

if(isset($_SESSION['logged_in'])){
	header("location: index");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	Login();
}

if($_GET['logout']){
	Logout();
}

?>