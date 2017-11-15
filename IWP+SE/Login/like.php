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
            $sql="insert into likes(Q_id,RegNo) values ('$data','$regid');";
            $repasses=mysqli_query($conn,$sql);
            echo $regid;
            echo $data;
            header('location:Main_Page.php');
        }
    ?>