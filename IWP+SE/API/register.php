<?php
require "connection.php";
$user_name = $_POST["name"];
$user_pass = $_POST["password"];
$user_email = $_POST["email"];
$user_reg_no = $_POST["user_reg_no"];
//$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";
$mysql_qry = "INSERT INTO Registration(RegNO,Email_Id,Name,Password)  VALUES ('$user_reg_no','$user_email','$user_name','$user_pass');";
if($conn->query($mysql_qry)===True){
	echo "Register Successful";
}else{
	echo "Invalid Credentials "."<br>".$conn->error;
}
$conn->close();
?>