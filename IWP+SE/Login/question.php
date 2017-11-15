
<html>

<body>

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

            $ques=$_POST['quest'];
            $regid=$_POST['regid'];
            $name=$_POST['name'];
            $pass=$_SESSION['pass'];
            $date = date("Y-m-d");
            $sql="insert into question(reg_id,username,ques,Date) values ('".addslashes($regid)."','".addslashes($name)."','".addslashes($ques)."','".addslashes($date)."')";
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