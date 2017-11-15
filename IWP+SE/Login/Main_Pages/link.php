
<?php
if(isset($_POST['submitt']))
{
$host='localhost';
         $dbuser='root';
         $pass='';
         $dbname='vreg';
         $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
session_start();
$_SESSION['ch']=$_POST['ch'];
header('location:chat.php');
}
if(!isset($_POST['submitt']))
{
	header('location:http://192.168.43.38/IWP+SE/Login/Main_Page.php');
}


?>