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

            $fn=$_POST['fn'];
            $regid=$_POST['regid'];
            $eid=$_POST['eid'];
            $pass=$_POST['pass'];
            $repass=$_POST['repass'];
            $check = "SELECT * from registration where RegNo='$_POST[regid]'";
            $lala = mysqli_query($conn, $check);
            $data = mysqli_fetch_array($lala, MYSQLI_NUM);
        if(empty($fn)||empty($eid)||empty($regid)||empty($pass)||empty($repass))
        {
            echo "Oops! Can't leave any field blank";
        }
        else if($pass!=$repass)
        {
            echo("Oops! Passwords do not match");
        }
        else if($data[0] > 0)
        {
            echo "ALREADY REGISTERED";
        }
        else
        {
            echo "<p style='text-align:center;''>"."<img src='tu1.jpg'/>"."</p>";
            echo "<p style='text-align:center;font-size:50px;'>"."Successfully Registered"."</p>";
            echo "<a href = 'http://192.168.43.38/IWP+SE/L&R_Page/lr_page.html'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";

            $sql="insert into registration(Name,Email_Id,RegNo,Password)"."values('$fn','$eid','$regid','$pass')";
            $repasses=mysqli_query($conn,$sql);
        }
    }
    ?>