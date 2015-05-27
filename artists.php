<?php
//connect to database and start session usage 
require("secure/dbconnect.php");
session_start(); 
error_reporting(E_ALL);
?>
<link type="text/css" rel="stylesheet" href="secure/stylesheet.css" />
<nav class="artists">
<form id="artistFilter" name="artistFilter" method="post" action="secure/artistFilter.php">
    	<select name ="Category">
        <?php 
		$sql1 = 'SELECT * FROM CATEGORY';
		$count = 0;
		foreach($dbh->query($sql1) as $row)
		{
			if($count==0)
			{
				echo '<option value="all">All Artists</option>';
			}
			echo '<option value="'.$count.'">'.$row[CATEGORY_NAME].'</option>';
			$count = $count + 1;
		}
		?>
        </select>
        <select name ="Sort">
        <option value="1">Ascending</option>
        <option value="2">Descending</option>
        </select>
        <input type="submit" name="submit" value="Filter">
</form><?php
//sends query to database to get all of artist table
		if($_GET['reload']=='true')
		{
			echo '<script src="secure/popupFunctions.js"></script>';
				$category = $_GET['category'];
				$category = $category;
				$sql2 = "SELECT DISTINCT * FROM ARTIST, CATEGORY_ENTRY WHERE ARTIST.ARTIST_ID = CATEGORY_ENTRY.ARTIST_ID AND CATEGORY_ENTRY.CATEGORY_ID=".$category;
			if(!isset($_GET['category']))
			{
				$sql2 = "SELECT DISTINCT * FROM ARTIST";
			}
			
			
			foreach ($dbh->query($sql2) as $row)
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
			
				else
				{//echo '<div id="popupGreyout">';
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
				
			}
		}
		else
		{
			echo '<script src="secure/popupFunctions.js"></script>';
			$sql2 = "SELECT * FROM ARTIST";
			foreach ($dbh->query($sql2) as $row)
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
			foreach ($dbh->query($sql2) as $row)
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
		}
//$frame = new artistFrame($count);	
//tags below are output of query, anything put between these 2 tags is going to get repeated for every artist
?>




<?php
//put this whole wheverever you want the output of artist table from database to end



?>
</div>
