<?php
session_start();
$ch=$_SESSION['ch'];
?>
<html>

<body>




<?php
        $host="localhost";
        $dbuser="root";        $pass="";
        $dbname="vreg";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        if(mysqli_connect_errno())
        {
            die("Connection Lost");
        }
        else
        {
            $regid=$_SESSION['user'];
            $data=$_POST['chatbox'];
            $sql="insert into chat(text_data,r_from,r_to) values ('$data','$regid','$ch');";
            $repasses=mysqli_query($conn,$sql);
        }
    ?>


</body>
</html>