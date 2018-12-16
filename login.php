<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 	<div class="header">
 		<h2>Login</h2>
 	</div>
 	<form method="post" action="login.php">
 		<?php include('errors.php'); ?> 
 		<div class="input-group">
 			<label>Username</label> 
 			<input id="user" name="user" type="text">
 		</div>
 		<div class="input-group">
 			<label>Password</label>
 			<input id="pass1" name="pass" type="password">
 		</div>
 		<div class="input-group"><br>
 			<button type="submit" class="btn">Login</button>
 		</div>
 		<p>
 			Not yet a member? 
 			then  <a href="registration.php">Register!</a>
 		</p>
 	</form>
</body>
</html>