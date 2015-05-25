<?php
//connect to database and start session usage 
require("secure/dbconnect.php");
session_start(); 
error_reporting(E_ALL);
?>

<table>

<img src="sources/background.jpg" width="1370" height="720" class="image" /> 

<div class="artist"></div>
<?php
//sends query to database to get all of artist table
$sql = "SELECT * FROM ARTIST";
foreach ($dbh->query($sql) as $row)
{
	
//tags below are output of query, anything put between these 2 tags is going to get repeated for every artist
?>



<tr><td><?php echo '<a href="artist.php?id=$row[ARTIST_ID]">'?><?php echo "$row[ARTIST_NAME]</a>" ?></td><td><?php echo "$row[ARTIST_TEXT_SHORT]" ?></td><td><img src= <?php echo "$row[ARTIST_IMAGEPATH]"?> width="128" height="128" /></td></tr></tr><br />

<?php
//put this whole wheverever you want the output of artist table from database to end
}
$dbh = null;
?>
</table>
