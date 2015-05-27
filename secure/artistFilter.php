<?php
$dbh = new PDO("sqlite:database.sqlite");
$debugOn = true;
$category = $_POST['Category'];
if ($_REQUEST['submit'] == "Filter")
{
	if($category=='all')
	{
		$sql1 = "SELECT ARTIST_NAME FROM ARTIST";
	
	foreach($dbh->query($sql1) as $row)
	{
		echo $row['ARTIST_NAME'];
		header("Location: ../index.php?page_id=2&reload=true");	
	}
	}
	else
	{
		$category = $category + 1;
		$sql2 = "SELECT ARTIST.ARTIST_NAME FROM ARTIST, CATEGORY_ENTRY WHERE ARTIST.ARTIST_ID = CATEGORY_ENTRY.ARTIST_ID AND CATEGORY_ENTRY.CATEGORY_ID =".$category;
		echo $sql2;
	foreach($dbh->query($sql2) as $row)
	{
		echo $row['ARTIST.ARTIST_NAME'];
		$location = "Location: ../index.php?page_id=2&reload=true&category=".$category;
		header($location);	
	}
	}
	
}

// close the database connection 
$dbh = null;
?>