<html>
<head>

<script type="text/javascript"></script>
<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="https://codepen.io/fbrz/pen/9a3e4ee2ef6dfd479ad33a2c85146fc1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<style>
#ch{
	 background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    width: 100%;

    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px;
}
#ch:hover{
	cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

#sear{
  background-image: url('search.svg');
  background-color: transparent;
  background-repeat: no-repeat;
  background-size:45px;
  padding-left: 50px;
  border: none;
  border-bottom: 2px solid red;
}
#qq{
  font-family: 'Raleway';
}
body{
  background-size: 100%;
}
#wel{
  font-size: 20px;
  font-family: 'Raleway';
}






/* Demo Styles */
#content {
  margin: 0 auto;
  padding-bottom: 50px;
  width: 80%;
  max-width: 978px;
}

h1 {
  font-size: 40px;
}

/* The Loader */
#loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
  overflow: hidden;
}
.no-js #loader-wrapper {
  display: none;
}

#loader {
  display: block;
  position: relative;
  left: 50%;
  top: 50%;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #16a085;
  -webkit-animation: spin 1.7s linear infinite;
          animation: spin 1.7s linear infinite;
  z-index: 11;
}
#loader:before {
  content: "";
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  bottom: 5px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #e74c3c;
  -webkit-animation: spin-reverse .6s linear infinite;
          animation: spin-reverse .6s linear infinite;
}
#loader:after {
  content: "";
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #f9c922;
  -webkit-animation: spin 1s linear infinite;
          animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
  }
}
@keyframes spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
#loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: #222;
  z-index: 10;
}

#loader-wrapper .loader-section.section-left {
  left: 0;
}

#loader-wrapper .loader-section.section-right {
  right: 0;
}

/* Loaded styles */
.loaded #loader-wrapper .loader-section.section-left {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.loaded #loader-wrapper .loader-section.section-right {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.loaded #loader {
  opacity: 0;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.loaded #loader-wrapper {
  visibility: hidden;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  -webkit-transition: all 0.3s 1s ease-out;
  transition: all 0.3s 1s ease-out;
}








</style>

</head>
<body onload='magic()' background="1111.jpg">



<div id="loader-wrapper">
  <div id="loader"></div>
  <script>
$(document).ready(function() {
 
  // Fakes the loading setting a timeout
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 1000);
 
});
</script>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  
</div>





<div id="content">
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
        else
        {
            $regid=$_POST['regid'];
            $pass=$_POST['pass'];
        if(empty($regid)||empty($pass))
        {
            header('Location: mypage.php');
        }
        else if(!empty($_POST['regid']))
        {
            $query = mysqli_query($conn, "SELECT * FROM registration where RegNo = '$_POST[regid]' and Password = '$_POST[pass]'") or die("Invalid Username or Password");
            $query1 = mysqli_query($conn, "SELECT Name FROM registration where RegNo = '$_POST[regid]' and Password = '$_POST[pass]'");
            $row = mysqli_fetch_array($query) or die(header('Location: mypage.php'));
            $row1 = mysqli_fetch_array($query1);
            if(!empty($row['RegNo']) AND !empty($row['Password'])) 
            	{ 
                $_SESSION['RegNo'] = $row['Password'];
            		//echo "<hr>Welcome : ";
                //echo $row1[0];
                echo "<form action='logout.php'><hr>&nbsp<span id=wel>Welcome : ".$row1[0]."</span><input type=submit style='float:right;background-color:red;border: none;' value='Logout'></form><hr>";
            	} 
            else { header('Location: mypage.php');}
        }
    }
  
    ?>












	<script>

	function magic()
	{
		document.getElementById('q').innerHTML = "<?php 
		$host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=1;
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $query = mysqli_query($conn, 'SELECT ques, Q_id, username FROM question');
          echo '<br><h2 id=qq>QUESTIONS</h2><br>';
          while($row = mysqli_fetch_assoc($query)) {
          	$qu = $row['ques'];
          	$no = $row['Q_id'];
            $user = $row['username'];
          	$stri = 'po'.$no;
        	echo '<button id=ch>'.$qu.'<sub>&nbsp&nbsp&nbsp&nbsp~'.$user.'</sub></button><br><br>';
        	}
        ?>";
	}



	</script>
	<center>
<form action='question.php' method='POST'>
  <input type=hidden value="<?php echo $row1[0]; ?>" name='name'>
  <input type=hidden value="<?php echo $regid; ?>" name='regid'>
  <input type=hidden value="<?php echo $pass; ?>" name='pass'>
  <input type='text' style='width:80%;height:40px;' name='quest' id='sear' placeholder ='Ask A Question'>
</form>
</center>
	<p id='q' align=center></div>

</div>


</body>
</html>