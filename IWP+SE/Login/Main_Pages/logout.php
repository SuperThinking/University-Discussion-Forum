<?php
    session_start();    
    session_destroy();
    header('location:http://localhost/IWP+SE/login/login.php');
?>