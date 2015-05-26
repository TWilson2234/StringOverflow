<?php
	try{
		$dbh = new PDO("sqlite:secure/database.sqlite");
	}

	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>