<?php 
session_start();  
error_reporting(E_ALL);
 ?>
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="stylesheet.css" />
<title>Artists | Townsville Community Music Centre</title>
</head>

<body>
<div class="nav">
<table>
	<th><a href="home.html"><img src="sources/music.png" id="emblem" /></th>
	<th><a class="navbuttons" href="index.php">Home</a></th>
	<th><a class="navbuttons" href="about.php">About Us</a></th>
	<th><a class="navbuttons" href="artists.php">Artists</a></th>
	<th><a class="navbuttons" href="events.php">Events</a></th>
	<th><a class="navbuttons" href="notices.php">Notices</a></th>
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


<!--<img src="sources/background.jpg" width="1370" height="720" class="image" /> -->
<div class="containter"> 
	<h1>WELCOME TO THE TOWNSVILLE COMMUNITY MUSIC CENTER</h1>
    
<div class="sfeat">
<h3>Visit us on Facebook:</h3>
	<img src="sources/fb.png">
    
	<a href="https://www.facebook.com/pages/Townsville-Community-Music-Center/159636880763534?fref=ts">Townsville Community Music Center</a><br>
	<br>
</div>
<br>

<div class="sfeat">
<h3>Volunteers Wanted:</h3>
	<p><strong>We Neeed You!</strong></p>
		<ul type="square">
		<li>Have a passion for music?</li>
		<li>Have a few spare hours?</li>
        <li>Love helping others?</li>
        <li>Want to be come apart of<br> the makings of a concert</li>
        </ul>
   	<h4>THAN THE COMMUNITY<br>MUSIC CENTER IS FOR YOU!</h4>
    <p>The Community Music Center is always<br>looking for new volunteers to help out.<br>If you are enthusiastic and ready<br>to learn then we want you. Volunteers<br>will have a choice of jobs to help out with.</p>
    <h4>For More Information:</h4>
    <p><strong>Phone:</strong> 4724 2086</p>
    <img src="sources/music.png"</div>
</div>


<p>Townsville Community Music Centre is a non-profit organisation that presents and faciliitates musical events, and asists and promotes musicisnans. </p>


<h2>Bulletins:</h2>
	<p><strong>We need to start putting in PHP stuff here. Preferably get the information from the database. If it is put in html we are at the same place we began.</strong></p>

<p>For More Bulletins Have a Look at our <a href="notices.html">Bulletin Page</a></p>

	<p><strong>this space needs the introduction and to float things to the right with squares. Refer to deisng. Float images to the right, text tight around them, and then float squares to the left with info in each square sectioned off.</strong></p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>



<br><br><br><br><br><br><br>
</div>


<footer>
<ul>
<h1>Contact us:</h1>
<li>Ph: 07 4724 2086</li>
<li>Mob: 0402 255 182</li>
<li>Address: Townsville Civic Theatre, 41 Boundry Street</li>
<li>Townsville, QLD 4810</li>
<li>Postal Address: PO Box 1006, Townsville, QLD 4810</li>
</ul>
<img src="sources/govemblem.png" /> 
<img src="sources/city of townsville.png"/>

<p>More text</p>
</footer>
</div>
</body>
</html>
