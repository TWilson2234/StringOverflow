<?php 
session_start();  
error_reporting(E_ALL);
 ?>
<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login Page</title>
<link href="styles.css" rel="stylesheet">
</head>
<body>
<h1>Login Page</h1>
<?php 

if (!isset($_SESSION['username'])) {
?>
<form id="login" name="login" method="post" action="authenticate.php">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username">
  <br>
    <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  <br>
    <input type="submit" name="submit" value="Login">
</form>
    <?php } ?>
</nav>
</body>
</html>