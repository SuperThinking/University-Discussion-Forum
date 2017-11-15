<?php
require "connection.php";
$user_reg_no = $_POST["user_reg_no"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from registration where RegNo like '$user_reg_no' and Password like '$user_pass';";
$result =  $conn->query($mysql_qry);
if($result->num_rows>0){
	echo "Login Successful";
}else{
	echo "Invalid Credentials".$conn->error;
}
$conn->close();
?>