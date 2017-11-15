<?php

session_start();
$pass=$_SESSION['pass'];
  $passs=$usus=$_SESSION['usus'];
  $regid=$_SESSION['usus'];
?>
<html>
<head>
	<style>
		
	#ch{
    background-color:#D9853B;/*#c66f21*/
    color: black;
    border-top: none;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 3px;
    height: 20%;
	}
	#ch:hover{
	  cursor:hand;
	  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}
	#ch:focus{
	  outline: 0;
	}
  #combine{
    background-color: #fcad67;
  }

	</style>
</head>
<body>

<center>

  <a href="http://192.168.43.38/IWP+SE/Login/Main_Page.php"><input type="image" name="home" src='home.png' width='60px'></a>

	<?php 
    	  $host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $i=0;
          $reggg=$_SESSION['user'];
          $regg = "16bce1111";
          $query = mysqli_query($conn, "SELECT Q_id FROM saved where RegNo='$reggg'");
          echo '<br><h2>SAVED POSTS</h2><br>';
          while($row = mysqli_fetch_assoc($query)) {
          	$no = $row['Q_id'];
          	$query1 = mysqli_query($conn, "SELECT ques, Q_id, username, reg_id FROM question WHERE Q_id='$no'");
          	$row1 = mysqli_fetch_assoc($query1);
        
            $qu = $row1['ques'];
            $no = $row1['Q_id'];
            $user = $row1['username'];
            $reg = $row1['reg_id'];


            #echo '<button id=ch>'.$qu.'<br><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub></button></form></center><br>';

            echo "<div id=combine>";
            echo '<form action=\'answer.php\' method=POST><center><input type=hidden value='.$usus.' name=\'usus\'><input type=hidden value='.$no.' name=\'no\'><input type=hidden value='.$reg.' name=\'regofques\'><input type=hidden value='.$passs.' name=\'mainpas\'><input type=hidden value='.$regid.' name=\'mainid\'><button id=ch>'.$qu.'<br><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub></button></form></center><br>';

            echo '<form action=\'deletesaved.php\' method=POST><input type=hidden value='.$no.' name=\'del_id\'><input type=image src=\'delete1.png\' width=50px></form>';
            echo "</div>";
          }
?>


</center>


</body>
</html>