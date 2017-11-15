	<?php
        $host="localhost";
        $dbuser="root";
        $pass="";
        $dbname="vreg";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        if(mysqli_connect_errno())
        {
            die("Connection Lost");
        }
        else
        {
            $regid=$_POST['regid'];
            $pass=$_POST['pass'];
            $passs = $pass;
        if(empty($regid)||empty($pass))
        {
            header('Location: mypage.php');
        }
        else if(!empty($_POST['regid']))
        {
            $query = mysqli_query($conn, "SELECT * FROM registration where RegNo = '$_POST[regid]' and Password = '$_POST[pass]'") or die("Invalid Username or Password");
            $query1 = mysqli_query($conn, "SELECT Name FROM registration where RegNo = '$_POST[regid]' and Password = '$_POST[pass]'");
            $row = mysqli_fetch_array($query) or die(header('Location: mypage.php'));
            $row1 = mysqli_fetch_array($query1);
            if(!empty($row['RegNo']) AND !empty($row['Password'])) 
            	{ 
                    session_start();
                    
                $_SESSION['user'] = $regid;
            	$_SESSION['pass'] = $passs;
                $_SESSION['usus'] = $row1[0];
                header("location:Main_Page.php");
            	} 
            else { header('Location: mypage.php');}
        }
    }
  
    ?>