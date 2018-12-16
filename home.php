<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Service Request Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>$(document).ready(function(){
    $("#text").hide();
  $("#other").change(function(){
    $("#text").show();
  });
   $("#crdlost").change(function(){
    $("#text").hide();
  });
   $("#payment").change(function(){
    $("#text").hide();
  });
  
});</script>
</head>

<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
	<form style="border-style:inset;margin-left:350px;margin-right:350px " method="POST" action="home.php">
		<table >
			<tr>
				<td><input type="radio" id="cardlost" name ="request" >CARD LOST</td></tr>
				<tr><td><input type="radio" id="payment" name="request">PAYMENT FAILED</td></tr>
				<br>
				<tr><td><input type="radio" name="request"id="other">OTHER</td></tr>
				<br>
                <tr><td><input type="text" name="requestservice" id="text">
                </td><td><button type="Submit" name="home-btn" >Submit</button></td></tr>
              
			
		</table>
	</form>
</center>
</body>
</html>
