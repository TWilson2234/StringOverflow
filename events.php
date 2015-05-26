<?php
//connect to database and start session usage 
require("secure/dbconnect.php");
session_start(); 
error_reporting(E_ALL);
?>
<div class="events">
<form id="eventFilter" name="eventFilter" method="post" action="">
    	<select name ="Day">
        <option value="1">1</option>
        </select>
        <select name ="Month">
        <option value="1">January</option>
        </select>
        <select name ="Year">
        <option value="1">2015</option>
        </select>
        <input type="submit" name="submit" value="Filter">
</form>
<?php
//sends query to database to get all of event table
$sql = "SELECT * FROM EVENT";
foreach ($dbh->query($sql) as $row)
{
	
//tags below are output of query, anything put between these 2 tags is going to get repeated for every event
?>



<ul><li><?php echo "$row[EVENT_DATE]</a>" ?></li><li><?php echo "$row[EVENT_TITLE]" ?></li><li><?php echo "$row[EVENT_TEXT]"?></li></ul><br />

<?php
//put this whole wheverever you want the output of event table from database to end
}
$dbh = null;
?>
</div>
