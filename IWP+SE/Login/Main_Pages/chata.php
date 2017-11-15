<?php session_start(); ?>
<a href='chat.php'>PRESS ME</a>

<?php

if(!isset($_POST['submitt']))
{
	header('location:http://192.168.43.38/IWP+SE/Login/Main_Page.php');
}

?>
