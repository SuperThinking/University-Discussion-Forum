<?php

session_start();

$host='localhost';
$dbuser='root';
$pass='';
$dbname='vreg';
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
$query1 = mysqli_query($conn, "DELETE FROM question WHERE Q_id = $_POST[del_id]");
$query2 = mysqli_query($conn, "DELETE FROM answer WHERE Q_id = $_POST[del_id]");
$query3 = mysqli_query($conn, "DELETE FROM saved WHERE Q_id = $_POST[del_id]");
header("location:main_page.php");

?>