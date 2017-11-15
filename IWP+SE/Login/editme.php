<?php
session_start();
$pass = $_SESSION['pass'];
?>

<?php
$anid = $_POST['id'];
$ans = $_POST['ans'];
?>

Edit your Answer
<br><br>
<form action='editlink.php' method="POST">

<textarea name='ans' rows="4" cols="50" style="height:100px;width:80%;border-radius:5px;margin-top:0px;area-multiline:true;" style='width:80%;'><?php echo $ans; ?></textarea>
<br>
<input type="password" placeholder='Confirm Your Password' name="check">
<br><br>
<input type="hidden" value=<?php echo $anid;?> name="id">
<input type="submit" value='SAVE'>
</form>
<a href='main_page.php' style="margin-top:-37px; margin-left: 100px;"><button style="margin-top:-37px; margin-left: 100px;">CANCEL</button></a>

