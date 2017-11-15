
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
            $query1 = mysqli_query($conn, "SELECT Name FROM registration where RegNo = '$_POST[regid]' and Password = '$_POST[pass]'");
            $row1 = mysqli_fetch_array($query1);
            $updatedans=$_POST['updatedans'];
            $regid=$_POST['regid'];
            $pass=$_POST['pass'];
            $qid=$_POST['qid'];
            $idans = $_POST['idans'];
            $sql="UPDATE answer SET Answer=$updatedans WHERE ans_id=$idans";
            $repasses=mysqli_query($conn,$sql);
        }
    ?>

<script>
window.onload = function(){
document.forms['Main_page'].submit();
}
</script>
<form action='Main_Page.php' method='POST' name='Main_page'>
<input type=hidden value="<?php echo $regid ?>" name='regid'>
<input type=hidden value="<?php echo $pass ?>" name='pass'>
</form>

</body>
</html>