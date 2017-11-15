<head>
	<style>
	#from{
		color:green;
		font-size: 25px;
		opacity: 0.8;
		max-width: 50%;
		background-color:yellow;
		border-radius:5px; 
		float: right;
		margin-bottom: 5px;
		margin-top: 5px;
		clear: both;
	}
	#to{
		color:yellow;
		font-size: 25px;
		opacity: 0.8;
		max-width: 50%;
		background-color:blue;
		border-radius:5px; 
		float: left;
		margin-bottom: 5px;
		margin-top: 5px;
		clear: both;
	}
	</style>

</head>
<body>
<?php
session_start();
$ch=$_SESSION['ch'];
?>
<?php 
	$host='localhost';
         $dbuser='root';
         $pass='';
         $dbname='vreg';
         $conn=mysqli_connect($host,$dbuser,$pass,$dbname); 
         ?>

<div id="container"> 
	<div id="chat_box"> 
	<?php 
	$regid=$_SESSION['user'];
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    $query = mysqli_query($conn, "SELECT text_data, r_from, r_to FROM chat WHERE (r_from='$regid' or r_to='$regid') and (r_from='$ch' or r_to='$ch')");
    echo '<br><br>';
	 while($row = mysqli_fetch_assoc($query)) {
	 	    $text = $row['text_data'];
            $from = $row['r_from'];
            $to = $row['r_to'];
            if($from==$regid)
            {
	?>
<div id="chat_data">
	<div id="chat_data"> 
		<span id='from'><?php echo $text; ?></span>
		<br><br>
	<?php } else 
	{
		?>

		<div id="chat_data">
	<div id="chat_data"> 
		<span id='to'><?php echo $from; ?> : <?php echo $text; ?></span>
		<br><br>
		<?php }}?>

</div>

</div>
</div>
</body>