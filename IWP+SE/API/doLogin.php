<?php
$db_name= "vreg";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

$user_reg_no = $_POST["user"];
$user_pass = $_POST["password"];
//print_r(json_encode($_POST));
$mysql_qry = "select * from registration where RegNo like '$user_reg_no' and Password like '$user_pass';";
$result =  $conn->query($mysql_qry);
if($result->num_rows>0){
  echo "true";
}else{
  echo "Invalid Credentials".$conn->error;
}
$conn->close();
?>