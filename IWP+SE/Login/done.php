<?php
session_start();
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
            $usus=$_SESSION['usus'];
            $ans=$_GET['ans'];
            $qid=$_GET['qid'];
            $date = date("Y-m-d");
            $sql="insert into answer(RegNo,username,Answer,Q_id,Date) values ('$regid','$usus','$ans','$qid','$date');";
            $repasses=mysqli_query($conn,$sql);
            header("location:Main_Page.php");
        }
    ?>


</body>
</html>