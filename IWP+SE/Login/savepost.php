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
            $regid=$_SESSION['user'];
            $qid=$_POST['idd'];
            $sql="insert into saved(RegNo,Q_id) values ('".addslashes($regid)."','".addslashes($qid)."')";
            $repasses=mysqli_query($conn,$sql);
        }
        header("location:saved.php");
    ?>
