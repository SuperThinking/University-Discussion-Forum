<!--Thoughts for Later : Form resub etc-->

<?php
session_start();
  $pass=$_SESSION['pass'];
  $regid=$_SESSION['user'];
  $usus=$_SESSION['usus'];
  $row=$_SESSION['usus'];
  $passs=$_SESSION['user'];
  $ch=$_SESSION['ch'];
?>

<html>
<head><title>VTWEET::CHAT</title>

	<link rel="stylesheet" type="text/css" href="cssfather.css">
	<script> 
	function chat_ajax()
	{ var req = new XMLHttpRequest(); req.onreadystatechange = function() 
		{ if(req.readyState == 4 && req.status == 200)
			{ document.getElementById('chat').innerHTML = req.responseText; }
		 }
		  req.open('GET', 'chatt.php', true); req.send(); } 
		  setInterval(function(){chat_ajax()}, 1000)
	</script>
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
		  <script type="text/javascript" src="send_ajax.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('form').submit( function () {
			var formdata = $(this).serialize();
			$.ajax({
			    type: "POST",
			    url: "submit.php",
			    data: formdata
			 });
			return false;
		});
	});

var cancel = true;


function ScrollMode(c)
{
	cancel = true;
	setTimeout(printSomething, c);
	function printSomething()
	{window.scrollTo(0,document.body.scrollHeight);
	if(cancel==true)
	{
	setTimeout(printSomething, c);}
	};
}

function ScrollModes(c)
{
	cancel = false;
}




function light()
{
	document.getElementById('bbody').style.background = '#d7dde5';
	document.getElementById('chatbox').style.background = '#c3c7cc';
	document.getElementById('chatbox').style.color = 'black';
	document.getElementById('sec-last-but').style.background = '#c3c7cc';
	document.getElementById('sec-last-but').style.color = 'black';
	document.getElementById('wel').style.background = '#d7dde5';
	document.getElementById('wel').style.color = 'black';
	document.getElementById('small-changes').style.color = "black"
	document.getElementById('small-changes2').style.color = "black"
}


function dark()
{
	document.getElementById('bbody').style.background = '#333333';
	document.getElementById('chatbox').style.background = '#191919';
	document.getElementById('chatbox').style.color = 'white';
	document.getElementById('sec-last-but').style.background = '#191919';
	document.getElementById('sec-last-but').style.color = 'white';
	document.getElementById('wel').style.background = '#333333';
	document.getElementById('wel').style.color = '#d7dde5';
	document.getElementById('small-changes').style.color = "#ffffff"
	document.getElementById('small-changes2').style.color = "#ffffff"
}

</script>

<!-- This Function keeps page to bottom -->

<link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">
<style>
#wel{
  font-size: 20px;
  font-family: 'Raleway';
  background-color: #d7dde5;
  background-size: 100%;
}
#chatbox{
	border : none;
	font-family: 'Asap Condensed', sans-serif;
	background-color: #c3c7cc;
	font-size: 20px;

}
#content {
  margin: 0 auto;
  padding-bottom: 50px;
  width: 80%;
  max-width: 978px;
}


#big-box{
	width: 70%;
}

#last-buts
{
	border-radius: 3px;
	width: 80%;
	height: 60px;
	background-color: #3C5B9A;
	border:none;
	font-size: 20px;
	color: white;
	font-family: 'Abril Fatface', cursive;
}
#small-changes, #small-changes2
{
	font-family: 'Abril Fatface', cursive;
	font-size: 20px;
}
#sec-last-but
{
	font-family: 'Titan One', cursive;
	height: 100px;
	font-size: 20px;
	background-color: #c3c7cc;
	border-right: none;
	float: right;
	width: 10%;
	border-bottom: none;
	border-left-color: #333333; 
}
#sec-last-but:hover, #last-buts:hover
{
	cursor: hand;
}
#sec-last-but:focus, #last-buts:focus
{
	outline: none;
}
</style>

</head>
<body bgcolor='#d7dde5' onload='ScrollMode(1000)' id='bbody'>

<div id='content'>
<?php

echo "<hr>&nbsp<span id=wel>Welcome : ".$row."</span><a href='logout.php'><input type=submit style='float:right;background-color:red;border: none;height:30px;' value='Logout' ></a><hr>";

?>
</div>

<div id='big-box'>
<div id="chat"></div>
<br><br>

<form method='POST' action='chat.php'>
	<textarea rows="4" cols="50" style="height:100px;width:90%;margin-top:0px;resize: none;" id='chatbox' placeholder='Message : ' name='chatbox'></textarea>
	<input type=submit name="submit" value='Send >' id='sec-last-but'/>
	</div>
</form>


<table width="60%">
	<tr>
<td>
<input type="button" id='last-buts'  value="CHAT MODE" onclick="ScrollMode(1000)"></td>
<td>
<input type="button" id='last-buts'  value="MESSAGE READ MODE" onclick="ScrollModes(9999999)"></td>
<td><input type="radio" name="theme" value="light" CHECKED onclick='light()'><span id='small-changes'>Light</span></td>
<td><input type="radio" name="theme" value="dark" onclick='dark()'><span id='small-changes2'>Dark</span></td>
<td><a href="http://192.168.43.38/IWP+SE/Login/Main_Page.php"><input type="image" name="home" src='home.png' width='30px'></a></td>
</tr>
</table>
</div>
<br>
</body>
</html>