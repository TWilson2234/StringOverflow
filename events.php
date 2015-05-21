<?php
//connect to database and start session usage 
require("secure/dbconnect.php");
session_start(); 
error_reporting(E_ALL);
?>

<?php
//sends query to database to get all of event table
$sql = "SELECT * FROM EVENT";
foreach ($dbh->query($sql) as $row)
{
	
//tags below are output of query, anything put between these 2 tags is going to get repeated for every artist
?>



<tr><td><?php echo "$row[EVENT_DATE]</a>" ?></td><td><?php echo "$row[EVENT_TITLE]" ?></td><td><?php echo "$row[EVENT_TEXT]"?></td></tr></tr><br />

<?php
//put this whole wheverever you want the output of event table from database to end
}
$dbh = null;
?>
</table>
</fieldset>
