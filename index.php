<?php include('server.php'); 
if(!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "you must log in first";
	header('location: log.php');
}
if(isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: log.php');
}
//if user is not logged in they cannot access this page
if(empty($_SESSION['username'])) {
	header('location: log.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 	<div class="header">
 		<h2>Logged in successfully</h2>
 	</div>
 	<div class="content">
 		<?php if (isset($_SESSION['success'])): ?>
 			<div class="error success">
 				<h3>
 					<?php
 					echo $_SESSION['success'];
 					unset($_SESSION['success']);
 					?>
 				</h3>
 			</div>
 		<?php endif ?>

 		<?php if(isset($_SESSION["username"])): ?>
           <p>Welcome <strong><?php echo $_SESSION['username']; ?> </strong></p>
           <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
           <br>
           <a href="home.php"> Go to home page</a>
 	    <?php endif ?>
 	</div>
</body>
</html>