<?php
//connect to database and start session usage 
require("secure/dbconnect.php");
session_start(); 
error_reporting(E_ALL);
?>
<link type="text/css" rel="stylesheet" href="secure/stylesheet.css" />
<nav class="artists">
<form id="artistFilter" name="artistFilter" method="post" action="">
    	<select name ="Category">
        <option value="1">1</option>
        </select>
        <select name ="Sort">
        <option value="1">1</option>
        </select>
        <input type="submit" name="submit" value="Filter">
</form><?php
//sends query to database to get all of artist table
		
			echo '<script src="secure/popupFunctions.js"></script>';
		$sql = "SELECT * FROM ARTIST";
		foreach ($dbh->query($sql) as $row)
		{
			$id = $row[ARTIST_ID];
			if($row[ARTIST_FEATURED]==1)
			{
				echo '<div class="artistFeatured">';
				echo '<ul>';
				echo '<li><a onclick="artist_show('.$id.')">'.$row[ARTIST_NAME].'</a></li>';
				echo '<li>'. $row[ARTIST_TEXT_SHORT] .'</li>';
    			echo '<li><img src='.$row[ARTIST_IMAGEPATH].' width="128" height="128" /></li>';
				echo '</ul>';
				echo '</div>';
			}
		}
		foreach ($dbh->query($sql) as $row)
		{
			//echo '<div id="popupGreyout">';
			$id = $row[ARTIST_ID];
			echo '<div class="artistSimple">';
			echo '<ul>';
			echo '<li><a onclick="artist_show('.$id.')">'.$row[ARTIST_NAME].'</a></li>';
			echo '<li>'. $row[ARTIST_TEXT_SHORT] .'</li>';
    		echo '<li><img src='.$row[ARTIST_IMAGEPATH].' width="128" height="128" /></li>';
			echo '</ul>';
			echo '</div>';
			echo '<div class="artistDetailed" id="'.$id.'">';
			echo '<img id="close" src="link to close image" onclick ="artist_hide('.$id.')">';
			echo '<h1>'.$row[ARTIST_NAME].'</h1>';
			echo $row[ARTIST_TEXT_LONG].'<br />';
			echo '<img src= '.$row[ARTIST_IMAGEPATH].' width="128" height="128" />';
			echo '</div>';//</div>';
			
		}
//$frame = new artistFrame($count);	
//tags below are output of query, anything put between these 2 tags is going to get repeated for every artist
?>




<?php
//put this whole wheverever you want the output of artist table from database to end



?>
</div>
