<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>USER REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 	<div class="header">
 		<h2>Register</h2>
 	</div>
 	<form method="post" action="registration.php">
 		<?php include('errors.php'); ?> 
 		<div class="input-group">
 			<label>Username</label> 
 			<input id="user" name="username" type="text" value="<?php echo $username; ?>">
 		</div>
 		<div class="input-group">
 			<label>type of customer</label> 
 			<input id="customertype" name="customertype" type="text" >
 		</div>
 		<div class="input-group">
 			<label>E-mail</label>
 			<input id="emailid" name="email" type="email" value="<?php echo $email; ?>">
 		</div>
 		<div class="input-group">
 			<label>Password</label>
 			<input id="pass2" name="password_1" type="password">
 		</div>
 		<div class="input-group">
 			<label>Confirm Password</label>
 			<input id="pass2" name="password_2" type="password">
 		</div>
 		<div class="input-group"><br>
 			<button type="submit" name="registration-btn" class="btn">Register</button>
 		</div>
 		<p>
 			Already a member? 
            <br> then  <a href="log.php">Login!</a> 
 		</p>
 	</form>
</body>
</html>