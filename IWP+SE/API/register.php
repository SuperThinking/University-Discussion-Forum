<?php
require "connection.php";
$name = $_GET["name"];
$pas = $_GET["password"];
$mail = $_GET["email"];
$rno = $_GET["user_reg_no"];
//$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";
$mysql_qry = "INSERT INTO Registration(RegNO,Email_Id,Name,Password)  VALUES ('$rno','$mail','$name','$pas');";
if($conn->query($mysql_qry)===True){
	echo "true";
}else{
	echo $conn->error;
}
$conn->close();
?>