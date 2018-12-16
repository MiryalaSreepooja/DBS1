<?php  
session_start();
$x=2;
$username="";
$email="";
$errors=array();
//connect to database
$db = mysqli_connect('localhost','root','','registration');
//if the register button is clicked
if (isset($_POST['registration-btn'])) {
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
	$customertype=mysqli_real_escape_string($db, $_POST['customertype']);
	if (empty($username)) {
		array_push($errors,"Username is required");
	}
	if (empty($email)) {
		array_push($errors,"Email is required");
	}
	if (empty($password_1)) {
		array_push($errors,"Password is required");
	}
	if  ($password_1 != $password_2) {
		array_push($errors,"Passwords do not match");
	}
	//if there are no errors save user to db
	if(count($errors) == 0) {
		$password=md5($password_1);//encryption
		$sql="INSERT INTO reg (username, password,email,customertype) VALUES ('$username','$password','$email','$customertype')";
		mysqli_query($db, $sql);
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";
		header('location: index.php');
	}

   }
   //log user from login page
	if(isset($_POST['log-btn'])) {
	$username=mysqli_real_escape_string($db, $_POST['username']);
	$password=mysqli_real_escape_string($db, $_POST['password']);
	if (empty($username)) {
		array_push($errors,"Username is required");
	}
	if (empty($password)) {
		array_push($errors,"Password is required");

	}
	if(count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM reg WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if ( mysqli_num_rows($result) == 1) {
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in";
			header('location: index.php');
		}else{
			array_push($errors,"wrong username/password combination");

		}
	}

   }


   if(isset($_POST['staff-btn'])) {
	$username=mysqli_real_escape_string($db, $_POST['username']);
	$password=mysqli_real_escape_string($db, $_POST['password']);
	if (empty($username)) {
		array_push($errors,"Username is required");
	}
	if (empty($password)) {
		array_push($errors,"Password is required");

	}
	if(count($errors) == 0) {
		//$password = md5($password);
		$query = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if ( mysqli_num_rows($result) == 1) {
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in";
			header('location: index.php');
		}else{
			array_push($errors,"wrong username/password combination");

		}
	}

   }
     //insert requests

   if(isset($_POST['home-btn'])) {
    $x++;
	$requestservice=mysqli_real_escape_string($db, $_POST['requestservice']);
	$sql1="INSERT INTO request (requestservice) VALUES ('$requestservice')";
	mysqli_query($db, $sql1);
    echo "Thank you, Your reference id is: $x"; 

	}


   if(isset($_POST['home-btn'])) 
   {
   	$query1 = "SELECT * FROM request";
   	 mysqli_query($db, $query1);
   }


   if(isset($_POST['add-btn']))
   {
   	$servicename = mysqli_real_escape_string($db, $_POST['servicename']);
	$sqlp="INSERT INTO service (sname) VALUES ('$servicename')";
	mysqli_query($db, $sqlp);

   }
	//logout
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: log.php');
	}
     //insert requests
	

?>