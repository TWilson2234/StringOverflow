<?php
include("dbconnect.php")?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CP2010 Milestone 1</title>
</head>
<body>
database list<br>
add<br>
currently selected<br>
	delete<br>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM ARTIST";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessphone.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> <input type='text' name='phone' value='$row[phone]' />\n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>