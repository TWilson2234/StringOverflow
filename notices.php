<?php
//connect to database and start session usage 
require("secure/dbconnect.php");
session_start(); 
error_reporting(E_ALL);
?>

<?php
//sends query to database to get all of event table
$sql = "SELECT * FROM NOTE";
foreach ($dbh->query($sql) as $row)
{
	
//tags below are output of query, anything put between these 2 tags is going to get repeated for every note
if(date() < $row[NOTE_DATE_EXPIRE])
{
?>



<tr><td><?php echo "$row[NOTE_TITLE]</a>" ?></td><td><tr><td><?php echo "$row[NOTE_DATE_POSTED]</a>" ?></td><td><?php echo "$row[NOTE_TEXT]" ?></td></tr><br />

<?php
//put this whole wheverever you want the output of note table from database to end
}
}
$dbh = null;
?>
