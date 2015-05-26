<?php
include("dbconnect.php");
$debugOn = true;

if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO ARTIST (ARTIST_NAME, ARTIST_TEXT_SHORT, ARTIST_TEXT_LONG, ARTIST_IMAGEPATH) VALUES ('$_REQUEST[name]', '$_REQUEST[sum]', '$_REQUEST[desc]', '$_REQUEST[img]')";
	if ($dbh->exec($sql))
		header("Location: index.php"); 
}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM ARTIST WHERE ARTIST_ID = '$_REQUEST[ID]'";
	if ($dbh->exec($sql))
		header("Location: index.php"); 
		}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE ARTIST SET ARTIST_NAME = '$_REQUEST[name]', ARTIST_TEXT_SHORT = '$_REQUEST[sum]' , ARTIST_TEXT_LONG = '$_REQUEST[desc]', ARTIST_IMAGEPATH = '$_REQUEST[img]' WHERE ARTIST_ID = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: index.php"); 
}
// close the database connection 
$dbh = null;
?>