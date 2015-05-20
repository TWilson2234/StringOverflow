<?php
include("dbconnect.php");
session_start();
error_reporting(E_ALL);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body><?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM ARTIST WHERE ARTIST_ID = {$_GET['id']}";
foreach ($dbh->query($sql) as $row)
{
	echo "<h1>$row[ARTIST_NAME]</h1>";
	echo "$row[ARTIST_TEXT_LONG]<br />";
	echo "<img src= $row[ARTIST_IMAGEPATH] width='128' height='128' />";
	
	
	if(isset($_SESSION['username']))
	{
	echo "<form id='deleteForm' name='deleteForm' method='post' action='artistmodify.php'>";
	echo "<input type='text' name='name' value='$row[ARTIST_NAME]' /> <input type='text' name='sum' value='$row[ARTIST_TEXT_SHORT]' /> <input type='text' name='desc' value='$row[ARTIST_TEXT_LONG]' /> <input type='text' name='img' value='$row[ARTIST_IMAGEPATH]' />\n";
	echo "<input type='hidden' name='id' value='$row[ARTIST_ID]' />";
	echo "<input type='submit' name='submit' value='Update Entry' />";
	echo "<input type='submit' name='submit' value='Delete Entry' class='deleteButton'>";
	echo "</form>";
	}
}
// close the database connection
$dbh = null;
?>
</body>
</html>