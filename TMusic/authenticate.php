<?php
include("dbconnect.php");
session_start();
error_reporting(E_ALL);
if (!isset($_SESSION['username']))
{
	if (isset($_POST['username'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT ACCOUNT_PASSWORD FROM ACCOUNT WHERE ACCOUNT_USERNAME = '$username'";
    	if($password == $dbh->exec($sql))
		{
			$_SESSION['username'] = $username;
			session_regenerate_id();
			$dbh = null;
			header("Location: index.php");
    	}
		else
		{
			header("Location: login.php");
			$dbh = null;
			exit();
		}
	}
	else
	{
		header("Location: login.php");
		exit();
	}
}
?>