<?php

// Initialize variable for database credentials
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'vreg';

//Create database connection
  $dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

//Check connection was successful
  if ($dblink->connect_errno) {
     printf("Failed to connect to database");
     exit();
  }

  $result = $dblink->query("SELECT * FROM answer");

  $dbdata = array();
  $x=0;
//Fetch into associative array
  while ( $row = $result->fetch_assoc())  {
	$dbdata[]=$row;
	}




//Print array in JSON format
 echo json_encode($dbdata);

?>