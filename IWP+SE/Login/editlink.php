<?php

session_start();
$pass = $_SESSION['pass'];
$pas = $_POST['check'];

if($_POST['check'] != $pass)
{
	session_destroy();
	header("location:login.php");
} 
else
{
	$host="localhost";
        $dbuser="root";        $pass="";
        $dbname="vreg";
        $ans=$_POST['ans'];
        $id=$_POST['id'];
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $sql="UPDATE answer SET Answer='$ans' WHERE ans_id='$id';";
        $repasses=mysqli_query($conn,$sql);
        header("location:Main_Page.php");
}
?>