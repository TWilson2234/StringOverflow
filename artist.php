<?php

function display()
	{
		require("secure/dbconnect.php");
		$sql = "SELECT * FROM ARTIST";
		foreach ($dbh->query($sql) as $row)
		{
			echo '<script src="secure/popupFunctions.js"></script>';
			//echo '<div id="popupGreyout">';
			$id = $row[ARTIST_ID];
			echo '<div id="'.$id.'">';
			echo '<h1>'.$row[ARTIST_NAME].'</h1>';
			echo $row[ARTIST_TEXT_LONG].'<br />';
			echo '<img src= '.$row[ARTIST_IMAGEPATH].' width="128" height="128" />';
			echo '</div>';//</div>';
			echo '<ul>';
			echo '<li><a onclick="artist_show('.$id.')">'.$row[ARTIST_NAME].'</a></li>';
			echo '<li>'. $row[ARTIST_TEXT_SHORT] .'</li>';
    		echo '<li><img src='.$row[ARTIST_IMAGEPATH].' width="128" height="128" /></li>';
			echo '</ul>';
		}//require("secure/dbconnect.php");
/*
if(isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
	$sql2 = "SELECT * FROM ACCOUNT WHERE ACCOUNT_EMAIL = '$username'";
	foreach ($dbh->query($sql2) as $row)
	{
		//checks if not free account (admin is 2, paid user is 1, free user is 0)
		if(!$row['ACCOUNT_TYPE'] == 0)
		{
			echo "<form id='deleteForm' name='deleteForm' method='post' action='artistmodify.php'>";
	echo "<input type='text' name='name' value='$row[ARTIST_NAME]' /> <input type='text' name='sum' value='$row[ARTIST_TEXT_SHORT]' /> <input type='text' name='desc' value='$row[ARTIST_TEXT_LONG]' /> <input type='text' name='img' value='$row[ARTIST_IMAGEPATH]' />\n";
	echo "<input type='hidden' name='id' value='$row[ARTIST_ID]' />";
	echo "<input type='submit' name='submit' value='Update Entry' />";
	echo "<input type='submit' name='submit' value='Delete Entry' class='deleteButton'>";
	echo "</form>";
		}
	}
}
// close the database connection
$dbh = null;*/


	}

?>