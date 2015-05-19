<?php
	try{
		$dbh = new PDO("sqlite:database.sqlite");
	}

	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>