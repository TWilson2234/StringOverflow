<?php
$dbh = new PDO("sqlite:database.sqlite");
$debugOn = true;
echo $_REQUEST;
if (isset($_REQUEST[signemail]) && isset($_REQUEST[signpassword]))
{
	$pass = md5($_REQUEST[signpassword]);
	$sql = "INSERT INTO ACCOUNT (ACCOUNT_FIRST_NAME, ACCOUNT_LAST_NAME, ACCOUNT_POSTAL_ADDRESS, ACCOUNT_PHONE, ACCOUNT_PHONE_AFTER, ACCOUNT_PHONE_MOB, ACCOUNT_EMAIL, ACCOUNT_PASSWORD) VALUES ('".$_REQUEST[firstName]."', '".$_REQUEST[lastName]."', '".$_REQUEST[address]."', '".$_REQUEST[phoneDay]."', '".$_REQUEST[phoneAfter]."', '".$_REQUEST[phoneMobile]."', '".$_REQUEST[signemail]."', '".$pass."')";
	if ($dbh->exec($sql))
		header("Location: ../index.php");
}
else
{
header("Location: ../index.php?page_id=5".$_REQUEST['signUp']);	
}

// close the database connection 
$dbh = null;
?>