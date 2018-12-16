<?php
$connect = mysqli_connect("localhost","root","","testing");
$filename = "employee_data.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);
foreach($array as $row)
{
	$sql="INSERT INTO empl(name, gender, designation) VALUES('".$row["name"]."','".$row["gender"]."','".$row["designation"]."')";
	mysqli_query($connect, $sql);
}
echo "Employee data inserted";
?>