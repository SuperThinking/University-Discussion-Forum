<?php

$db_name= "vreg";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

$query = mysqli_query($conn, "SELECT RegNo, Name from registration");

$dbdata = array();

while ( $row = $query->fetch_assoc())  {
	$dbdata[]=$row;
	}


 echo json_encode($dbdata);

?>