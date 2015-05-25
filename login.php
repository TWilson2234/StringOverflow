<script src="secure/loginPopupFunctions.js"></script>
<div id="popupContact">
<title>Login Page</title>
</head>
<body>
 <!-- Contact Us Form -->
<form action="secure/authenticate.php" id="login" method="post" name="login">
<img id="close" src='link to close image' onclick ="div_hide()">
<h1>Login Page</h1>
<hr>
<label for="username">Username:</label><input type="text" name="username" id="username"><br>
<label for="password">Password:</label><input type="password" name="password" id="password"><br>
<a href="javascript:%20check_empty()" id="submit" type="submit" name="submit" value="Login">Login</a>
</form></div>