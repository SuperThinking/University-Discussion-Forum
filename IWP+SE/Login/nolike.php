<?php
		session_start();
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
            $regid=$_POST['regid'];
            $data=$_POST['no'];
            $sql="delete from likes where (Q_id='$data' and RegNo ='$regid');";
            $repasses=mysqli_query($conn,$sql);
            header('location:Main_Page.php');
        }
    ?>