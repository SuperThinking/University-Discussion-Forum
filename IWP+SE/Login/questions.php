<head>

</head>
<body>
<?php
session_start();
$pass=$_SESSION['pass'];
  $regid=$_SESSION['user'];
  $usus=$_SESSION['usus'];
  $row=$_SESSION['usus'];
  $passs=$_SESSION['user'];
?>

	<?php 
    $host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=0;
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $query = mysqli_query($conn, 'SELECT ques, Q_id, username, reg_id, Date FROM question ORDER BY DATE DESC, Q_id DESC');
          echo "<br><div id='qdiv'><h2 id=qq>QUESTIONS</h2></div><br>";
          
          while($row = mysqli_fetch_assoc($query)) {

            

            echo '<div id=\'full\'><br>';
            $qu = $row['ques'];
            $no = $row['Q_id'];
            $user = $row['username'];
            $reg = $row['reg_id'];
            $qdate = $row['Date'];

            $todate = "20".date('y-m-d');
            $mdate = $todate[5]*10+$todate[6];
            $ydate = $todate[2]*10 + $todate[3];
            $yydate = $qdate[2]*10 + $qdate[3];
            $mmdate = $qdate[5]*10+$qdate[6];
            if($regid==$reg)
            {
            if($ydate==$yydate && $mdate==$mmdate+6)
            {
              header("location:force_delete.php");
            }
            else if($ydate>$yydate)
            {
              if($mdate+12-$mmdate == 6)
              {
                header("location:force_delete.php");
              }
            }
          }
            #echo '<button id=ch>'.$qu.'<br><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub></button></form></center><br>';
            $check = "SELECT * from likes where Q_id='$no' and RegNo='$regid'";
            $lala = mysqli_query($conn, $check);
            $data = mysqli_fetch_array($lala, MYSQLI_NUM);

            $lid = $regid.$no;
            $but = 's'.$lid;
            $fnl = 'formnolike'.$lid;
            $fl = 'formlike'.$lid;
            echo "<ul style='float:right;clear:both;list-style: none;'>";
            if($data[0]>0)
            {
              echo '<li><form id='.$lid.' name='.$lid.'><input type=hidden value='.$regid.' name=\'regid\'><input type=hidden value='.$no.' name=\'no\'><input type=\'image\' value='.$lid.' id='.$but.' src=\'like1.png\' width=\'50px\' onclick=\'nolike(this.value)\'></form>';
            }
            else
            {
              echo '<li><form id='.$lid.' name='.$lid.'><input type=hidden value='.$regid.' name=\'regid\'><input type=hidden value='.$no.' name=\'no\'><input type=\'image\' value='.$lid.' id='.$but.' src=\'nolike1.png\' width=\'50px\' onclick=\'like(this.value)\'></form>';
            }

            
            $check = mysqli_query($conn,"SELECT * from likes WHERE Q_id='$no'");
            $countt = 0;

            while($cou = mysqli_fetch_assoc($check))
            {
              if($no==$cou['Q_id'])
              {
                $countt++;
              }
            }
            $haha = 'c'.$lid;
            echo "<li><h2><span id=".$haha." style='background-color:#328cc1;box-shadow: 2px 4px 8px 0 rgba(0,0,0,0.2);padding-left:15px;padding-right:15px;'>".$countt."</span></h2></ul>";


            echo '<form action=\'answer.php\' method=POST><center><input type=hidden value='.$usus.' name=\'usus\'><input type=hidden value='.$no.' name=\'no\'><input type=hidden value='.$reg.' name=\'regofques\'><input type=hidden value='.$passs.' name=\'mainpas\'><input type=hidden value='.$regid.' name=\'mainid\'><button id=ch><h3>'.$qu.'</h3><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub><br><br><sub>&nbsp&nbsp&nbsp&nbspAsked On : '.$qdate.'</button></form></center><br>';

            echo '</div><br><br>';

          }
?>

</body>