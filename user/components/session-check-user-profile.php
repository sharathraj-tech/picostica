<?php
	session_start();
	require '../database/dbconnection.php';
	$user_username=mysqli_real_escape_string($con,$_REQUEST['user_username']);
	$current_user=$_SESSION['user_username'];
	if($_SESSION['user_username'])
	{
		header("location:../profile.php?user_username=$user_username&current_user=$current_user");
	}
?>