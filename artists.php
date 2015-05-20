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
<title>Artists | Townsville Community Music Centre</title>
</head>

<body>
<div class="nav">
<table>
<th><a href="home.html"><img src="sources/music.png" id="emblem" /> </th>
<th><a class="navbuttons" href="index.php"> Home </a></th>
<th><a class="navbuttons" href="about.php"> About Us </a></th>
<th><a class="navbuttons" href="artists.php"> Artists </a></th>
<th><a class="navbuttons" href="events.php"> Events </a></th>
<th><a class="navbuttons" href="notices.php"> Notices </a></th>
<?php if (!isset($_SESSION['username']))
		{ 
			echo '<th><a class="navbuttons" id="special" href="signup.php"> Sign up </a></th><th><a class="navbuttons" 				id="special" href="login.php"> Login </a></th>';
		}
		else
		{
			echo '<th><a class="navbuttons" id="special" href="logout.php"> Log Out </a></th>';	
		}?>
</table>
</div>

<img src="sources/background.jpg" width="1370" height="720" class="image" /> 

<div class="artist"></div>
<?php
$sql = "SELECT * FROM ARTIST";
foreach ($dbh->query($sql) as $row)
{
?>
<tr><td><a href="artist.php?id=<?php echo "$row[ARTIST_ID]" ?>"><?php echo "$row[ARTIST_NAME]</a>" ?></td><td><?php echo "$row[ARTIST_TEXT_SHORT]" ?></td><td><img src= <?php echo "$row[ARTIST_IMAGEPATH]"?> width="128" height="128" /></td></tr></tr>

<?php
}
echo "</table>";
echo "</fieldset>\n";
$dbh = null;
?>
<br />

<div class="footer">

<ul id="contactinfo">
<h1 id="contact"> Contact us: </h1>
<li>Ph: 07 4724 2086</li>
<li>Mob: 0402 255 182</li>
<li>Address: Townsville Civic Theatre, 41 Boundry Street,</li> <li>Townsville, QLD 4810</li>
<li>Postal Address: PO Box 1006, Townsville, QLD 4810</li>
</ul>

<img src="sources/govemblem.png" width="200" height="197" id="govemblem" /> 
<img src="sources/city of townsville.png" width="200" height="197" id="townsville" />
</div>
</body>
</html>
