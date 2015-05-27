<?php
//connect to database and start session usage 
require("secure/dbconnect.php");
session_start(); 
error_reporting(E_ALL);
?>



<div class="events">
   
<?php
//sends query to database to get all of event table
$sql1 = "SELECT * FROM ARTIST";
$array;
foreach($dbh->query($sql1) as $row)
{
	$array[$row[ARTIST_ID]] = $row[ARTIST_NAME];
}


$sql2 = "SELECT * FROM EVENT WHERE EVENT_DATE > date('now')";
$count = 0;
foreach ($dbh->query($sql2) as $row)
{ 
//tags below are output of query, anything put between these 2 tags is going to get repeated for every event
?>


<ul><li><?php echo "$row[EVENT_DATE]</a>" ?></li><li><?php echo "$row[EVENT_TITLE]" ?></li><li><?php echo "$row[EVENT_TEXT]"?></li></ul><br />

<?php
//put this whole wheverever you want the output of event table from database to end
}
?>


        <?php 
$dbh = null;
?>
</div>
