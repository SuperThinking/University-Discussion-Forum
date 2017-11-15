<?php

session_start();

$host='localhost';
$dbuser='root';
$pass='';
$dbname='vreg';
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
$us = $_SESSION['user'];
$qid = $_POST['del_id'];
$query3 = mysqli_query($conn, "DELETE FROM saved WHERE (RegNo = '$us') and (Q_id = '$qid');");
header("location:main_page.php");
?>