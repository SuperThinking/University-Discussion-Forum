<?php session_start(); ?>

<html>
<head><title>VCHAT</title>
<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">
<style>
span{
	font-size: 40px;
	font-family: 'Asap Condensed', sans-serif;
}
h1{
	font-size: 70px;
	font-family: 'Asap Condensed', sans-serif;
} 



input[type='text']{
	width: 40%;
	height: 30px;
	border-radius: 10px;
	font-family: 'Asap Condensed', sans-serif;
	text-align: center;
}

input[type='submit']{
	width: 30%;
	height: 30px;
	border-radius: 10px;
	font-family: 'Asap Condensed', sans-serif;
	text-align: center;
}


#ch:focus{
  outline: 0;
}
</style>
<script>
	
</script>
</head>
<body background='11.gif'>

<center><h1>VCHAT</h1>
	<br><br><br><br>
	<span>REGISTRATION NUMBER
	<br>
	(of the user you want to chat with)
	<br><br></span>
	<form method='POST' action='link.php'>
		<input type=text id='ch' name='ch'><br><br>
		<input type=submit id='submitt' name='submitt'>
	</form>
</body>
</html>