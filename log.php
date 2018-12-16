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
 	<form method="post" action="log.php">
 		<?php include('errors.php'); ?> 
 		<div class="input-group">
 			<label>Username</label> 
 			<input name="username" type="text">
 		</div>
 		<div class="input-group">
 			<label>Password</label>
 			<input name="password" type="password">
 		</div>
 		<div class="input-group"><br>
 			<button type="submit" name="log-btn" class="btn">Login</button>
 		</div>
 		<p>
 			Not yet a member? 
            <br> then  <a href="registration.php">Register!</a>
            <br>
            operational staff?
            <a href="loginstaff.php">Loginstaff!</a>
            <br>
             <a href="admin.php">Admin login</a>

 		</p>
 	</form>
</body>
</html>