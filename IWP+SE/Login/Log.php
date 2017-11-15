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
      
          else{
          $regid=$_POST['regid'];
            $pass=$_POST['pass'];
          }

          if(!empty($_POST['regid']))
          {
            $query = mysqli_query($conn, "SELECT * FROM registration where RegNo = '$_POST[regid]' and Password = '$_POST[pass]'");
              $row = mysqli_fetch_array($query);

              if($row==NULL)
              {
                echo "NO";
              }
              else{
                echo "Yes";
              }
          }
  ?>