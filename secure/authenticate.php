<?php
$dbh = new PDO("sqlite:database.sqlite");
session_start();
error_reporting(E_ALL);
if (!isset($_SESSION['username']))
{
	if (isset($_POST['username'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT ACCOUNT_PASSWORD FROM ACCOUNT WHERE ACCOUNT_USERNAME = '$username'";
		foreach($dbh->query($sql) as $row)
		{
			if(!isset ($row))
			{
				//if no results, kick
				header("Location: ../login.php");
				$dbh = null;
				exit();
			}
			if($password == $row[ACCOUNT_PASSWORD])
			{
				$_SESSION['username'] = $username;
				session_regenerate_id();
				$dbh = null;
				header("Location: ../index.php");
				exit();
    		}
		}
		header("Location: ../login.php");
		$dbh = null;
		exit();
	}
	else
	{
		header("Location: login.php");
		exit();
	}
}
?>