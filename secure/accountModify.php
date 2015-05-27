<?php
$dbh = new PDO("sqlite:database.sqlite");
$debugOn = true;

if ($_REQUEST['submit'] == "Submit")
{
	$sql = "INSERT INTO ACCOUNT (ACCOUNT_FIRST_NAME, ACCOUNT_LAST_NAME, ACCOUNT_POSTAL_ADDRESS, ACCOUNT_PHONE, ACCOUNT_PHONE_AFTER, ACCOUNT_PHONE_MOB, ACCOUNT_EMAIL, ACCOUNT_PASSWORD) VALUES ('$_REQUEST[firstName]', '$_REQUEST[lastName]', '$_REQUEST[address]', '$_REQUEST[phoneDay]', '$_REQUEST[phoneAfter]', '$_REQUEST[phoneMobile]', '$_REQUEST[email]', '$_REQUEST[password]')";
	if ($dbh->exec($sql))
		header("Location: index.php"); 
}

// close the database connection 
$dbh = null;
?>