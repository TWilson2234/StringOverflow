<?php
$dbh = new PDO("sqlite:database.sqlite");
session_start();
error_reporting(E_ALL);
if (!isset($_SESSION['username']))
{
	if (isset($_POST['email'])) 
	{
		$username = $_POST['email'];
		$password = md5($_POST['password']);
		$sql = "SELECT ACCOUNT_PASSWORD FROM ACCOUNT WHERE ACCOUNT_EMAIL = '$username'";
		foreach($dbh->query($sql) as $row)
		{
			if($password == $row[ACCOUNT_PASSWORD])
			{
				$_SESSION['username'] = $username;
				session_regenerate_id();
				$dbh = null;
				header("Location: ../index.php");
    		}
		}
		$dbh = null;
	}
}
?>