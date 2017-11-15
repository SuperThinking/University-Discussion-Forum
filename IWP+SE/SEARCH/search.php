<?php
    $key=$_GET['key'];
    $host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=0;
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    $query=mysqli_query($conn, "SELECT * FROM question WHERE ques LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['ques'];
    }
    echo json_encode($array);
?>
