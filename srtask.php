<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body
	{
		border: 1px solid black;
		font-family: gabriola;
		font-size: 100px;
		border-spacing: : 100px 100px 100px 100px;
	}
</style>
</head>

<body align="center" >
<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT refid,requestservice FROM request";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


    while($row = $result->fetch_assoc()) {
        echo "Reference id  |" . $row["refid"]. "   RequestService |" . $row["requestservice"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>