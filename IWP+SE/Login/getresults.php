<?php 
  if(isset($_POST['getresult']))
  {
    $host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=1;
          $no = $_POST['getresult'];
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $query = mysqli_query($conn, 'SELECT ques, Q_id, username, reg_id FROM question');
          echo '<br><h2 id=qq>QUESTIONS</h2><br>';
          while($row = mysqli_fetch_assoc($query)) {
            $qu = $row['ques'];
            $no = $row['Q_id'];
            $user = $row['username'];
            $reg = $row['reg_id'];
            echo '<form action=\'answer.php\' method=POST><center><input type=hidden value='.$no.' name=\'no\'><button id=ch>'.$qu.'<br><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub></button></form></center><br>';
          }
          exit();
        }
?>