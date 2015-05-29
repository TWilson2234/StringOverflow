<?php
require("secure/dbconnect.php"); 
session_start();  
error_reporting(E_ALL);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="secure/stylesheet.css" />
<?php

switch($_GET['page_id'])
{
	case(1):
	$title = 'About Us';
	break;
	
	case(2):
	$title = 'Artists';
	break;
	
	case(3):
	$title = 'Events';
	break;
	
	case(4):
	$title = 'Notices';
	break;
	
	case(5):
	$title = 'Sign Up';
	break;
	
	case(6):
	$title = 'Feeder';
	
	default:
	$title = 'Home Page';
}
?>
<title><?php echo $title; ?> | Townsville Community Music Centre</title>
</head>


<div class="nav">
<ul>
<li><a href="index.php"><img src="sources/music.png" id="emblem" /></a></li>
<li><a class="navbuttons" href="index.php"> Home </a></li>
<li><a class="navbuttons" href="?page_id=1"> About Us </a></li>
<li><a class="navbuttons" href="?page_id=2"> Artists </a></li>
<li><a class="navbuttons" href="?page_id=3"> Events </a></li>
<li><a class="navbuttons" href="?page_id=4"> Notices </a></li>
<li><a class="navbuttons" href="?page_id=6"> Feeder </a></li>
<?php if (!isset($_SESSION['username']))
		{ 
			echo '<li><a class="navbuttons" id="special" href="?page_id=5"> Sign up </a></li>
<li><a class="navbuttons" id="special" onclick="login_show()"> Login </a></li>';
		}
		else
		{
			echo '<li><a class="navbuttons" id="special" href="logout.php"> Log Out </a></li>';	
		}?>
</ul>
</div>
<?php require("login.php"); ?>
<body>

<!--<img src="sources/background.jpg" width="1370" height="720" class="image" /> -->
 
<?php

switch($_GET['page_id'])
{
	case(1):
	echo '<img src="sources/Banners/1AboutUsBanner.png" class="banner" /><div class="containter">';
	include("aboutus.php");
	break;
	
	case(2):
	echo '<img src="sources/Banners/1ArtistsBanner.png" class="banner" /><div class="containter">';
	include("artists.php");
	break;
	
	case(3):
	echo '<img src="sources/Banners/1EventsBanner.png" class="banner" /><div class="containter">';
	include("events.php");
	break;
	
	case(4):
	echo '<img src="sources/Banners/1NoticesBanner.png" class="banner" /><div class="containter">';
	include("notices.php");
	break;
	
	case(5):
	echo '<img src="sources/Banners/1MembersBanner.png" class="banner" /><div class="containter">';
	include("signup.php");
	break;
	
	case(6):
	include("feeder.php");
	break;
	
	default:
	echo '<img src="sources/Banners/1HomeBanner.png" class="banner" /><div class="containter">';
	include("home.php");
}
?>
</body>
</html>
