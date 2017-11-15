<?php
session_start();
  if (isset($_SESSION['user'])) {
  $pass=$_SESSION['pass'];
  $regid=$_SESSION['user'];
  $usus=$_SESSION['usus'];
  $row=$_SESSION['usus'];
  $passs=$_SESSION['user'];
 ?>

<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">
 <script src="jquery.js"></script>

<script src="codepen.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="anijs.js" type="text/javascript"></script>
<script src="anijsjs.js" type="text/javascript"></script>
<link rel="stylesheet" href="cssfather.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">


<script type="text/javascript" src="send_ajax.js"></script>
<script>

function like(e){
            var but = "s"+e;
            var haha = "c"+e;
            document.getElementById(but).src='like1.png';
            document.getElementById(haha).innerHTML = parseInt(document.getElementById(haha).innerHTML)+1;
            var n = '#'+e;
            $(n).submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'like.php',
                    type:'POST',
                    data:$(n).serialize(),
                    success:function(){
                      
                        var e = "";var i;
                      for(i=1;i<n.length;i++){e=e+n[i];}
                        var but = "s"+e;
                      var haha = "c"+e;
                      var y="";
                      for(i=0;i<9;i++){y=y+e[i];}
                      var z="";
                      var j=e.length;
                      for(i=9;i<j;i++){z=z+e[i];}
                                
                      document.getElementById(e).innerHTML = "<input type=hidden value="+y+" name=\'regid\'><input type=hidden value="+z+" name=\'no\'><input type=\'image\' value="+e+" id="+but+" src=\'like1.png\' width=\'50px\' onclick=\'nolike(this.value)\'>";
                    }
                });
            });

            
        }


function nolike(e){
            var but = "s"+e;
            var haha = "c"+e;
            var n = '#'+e;
            document.getElementById(but).src='nolike1.png';
            document.getElementById(haha).innerHTML = parseInt(document.getElementById(haha).innerHTML)-1;
            //alert(n);
            $(n).submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'nolike.php',
                    type:'POST',
                    data:$(n).serialize(),
                    success:function(){
                      var e = "";var i;
                      for(i=1;i<n.length;i++){e=e+n[i];}
                        var but = "s"+e;
                      var haha = "c"+e;
                      var y="";
                      for(i=0;i<9;i++){y=y+e[i];}
                      var z="";
                      var j=e.length;
                      for(i=9;i<j;i++){z=z+e[i];}
                                
                      document.getElementById(e).innerHTML = "<input type=hidden value="+y+" name=\'regid\'><input type=hidden value="+z+" name=\'no\'><input type=\'image\' value="+e+" id="+but+" src=\'nolike1.png\' width=\'50px\' onclick=\'like(this.value)\'>";   
                    }
                });
            });
            
            

        }

function change()
{
  var y="";var i;
  for(i=0;i<9;i++){y=y+e[i];}
  var z="";
  var j=e.length;
  for(i=9;i<j;i++){z=z+e[i];}
            
  document.getElementById(e).innerHTML = "<input type=hidden value="+y+" name=\'regid\'><input type=hidden value="+z+" name=\'no\'><input type=\'image\' value="+e+" id="+but+" src=\'nolike1.png\' width=\'50px\' onclick=\'like(this.value)\'>";
  document.getElementById(haha).innerHTML = parseInt(document.getElementById(haha).innerHTML)-1;
}

function menu()
{
  if(document.getElementById('drop').style.visibility=="hidden")
  {    
    document.getElementById('drop').style.visibility = "visible";
  }
  else
  {
    document.getElementById('drop').style.visibility = "hidden"; 
  }
}

</script>


<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
<style>

#qa
{
  font-family: 'Luckiest Guy', cursive;
}

#body{
  overflow-y: hidden;
}

#full
{
  background-color:#0b3c5d;/*#c66f21*/
    color: black;
    border-top: none;
    padding: 10px 25px;
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.6s;
    border-radius: 6px;

}

#headd
{
  background-color: #042b44;
  width: 100%;
  position: fixed;
  margin-top: -25px;
  opacity: 0px;
  z-index: 999;
  clear: both;
  overflow: hidden;
}

#innerheaddd
{
  padding-top: 10px;
  text-align: center;
  width: 100%
}

#headdd
{
  background-color: #edf8ff;
  width: 100%;
  position: fixed;
  clear: both;
  z-index: 999;
  overflow: hidden;
}

#spacer
{
  height:95px;
}

#wel{
  font-size: 50px;
  font-family: 'Monoton', cursive;
  background-size: 100%;
  display: inline-block;
  color: red;
  clear: both;
  outline: 0;
}

#wel-wel{
  font-family: 'Abril Fatface', cursive;
  background-size: 100%;
  display: inline-block;
  color: red;
  clear: both;
  outline: 0;
  font-size: 20px;
}
#wel:hover{
  color: pink;
  text-shadow: 0 0.5 0.5px #FF0000;
  cursor: hand;
}
#wel-but:focus{
  outline: 0;
}

#drop
{
  position: fixed;
  visibility: hidden;
  margin-left: -20px;
  clear: both;
  background-color: white;
  padding-right: 20px;
  border-bottom-right-radius: 5px;
  opacity: 0.6;
  filter: alpha(opacity=60);
}

#saved-drop
{
  background-color:#D4AF37;
  height:50px;
  border: none;
  width:80%;
  border-left: 2px;
  border-right: 2px;
  border-radius: 5px;
  transition: 0.3s;
  color: white;
  outline: 0;
}

#chat-but-drop
{
  background-color:#333333;
  height:50px;
  border: none;
  width:80%;
  border-left: 2px;
  border-right: 2px;
  border-radius: 5px;
  transition: 0.3s;
  color: white;
}

#logout-drop
{
  background-color:red;
  border: none;
  height:50px;
  width:80%;
  border-left: 2px;
  border-right: 2px;
  margin-top: 16px;
  border-radius: 5px;
    transition: 0.3s;
    color: white;
}

#saved
{
  background-color:#926dba;
  height:50px;
  border: none;
  width:100%;
  border-left: 2px;
  border-right: 2px;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;

  outline: 0;
}

#chat-but
{
  background-color:#926dba;
  height:50px;
  border: none;
  width:100%;
  border-left: 2px;
  border-right: 2px;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

#logout
{
  background-color:#926dba;
  border: none;
  height:50px;
  width:100%;
  border-left: 2px;
  border-right: 2px;
  margin-top: 16px;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

#ch{
    background-color:#328cc1;/*#c66f21*/
    color: black;
    border-top: none;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 3px;
    border-color: #3d8bba;
  }
#ch:hover{
  cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
#ch:focus{
  outline: 0;
}
#sear{
  background-image: url('search.svg');
  background-color: white;
  background-repeat: no-repeat;
  background-size:45px;
  padding-left: 50px;
  border: none;
  border-bottom: 1px solid #333333;
  /*border-radius: 8px;*/
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  margin-top: 15px;
}
#qq{
  font-family: 'Raleway';
}



#menu{
}

textarea:focus, input:focus
{
    outline: none;
}


#saved:hover, #saved-drop:hover{
  cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

#logout:hover, #logout-drop:hover{
  cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

#chat-but:hover, #chat-but-drop:hover{
  cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

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


#loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: #222;
  z-index: 10;
}

#loader-wrapper .loader-section.section-left {
  background: #222;
  left: 0;
}

#loader-wrapper .loader-section.section-right {
  right: 0;
}

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
  -webkit-transition: all 5.3s ease-out;
  transition: all 5.3s ease-out;
}

.loaded #loader-wrapper {
  visibility: hidden;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  -webkit-transition: all 0.3s 1s ease-out;
  transition: all 0.3s 1s ease-out;
}





.round-button {
  width:25%;
}
.round-button-circle {
  width: 100%;
  height:0;
  padding-bottom: 100%;
    border-radius: 50%;
  border:10px solid #cfdcec;
    overflow:hidden;
    
    background: #4679BD; 
    box-shadow: 0 0 3px gray;
}
.round-button-circle:hover {
  background:#30588e;
}
.round-button a {
    display:block;
  float:left;
  width:100%;
  padding-top:50%;
    padding-bottom:50%;
  line-height:1em;
  margin-top:-0.5em;
    
  text-align:center;
  color:#e2eaf3;
    font-family:Verdana;
    font-size:1.2em;
    font-weight:bold;
    text-decoration:none;
}


</style>





<script> 

  function load_questions()
  { var req = new XMLHttpRequest(); req.onreadystatechange = function() 
    { if(req.readyState == 4 && req.status == 200)
      { document.getElementById('question_space').innerHTML = req.responseText; }
     }
      req.open('GET', 'questions.php', true); req.send(); } 
      setInterval(function(){load_questions()}, 1000)

  </script>




</head>
<body bgcolor='#1D2731' id='body'>
  <!--<input type='text' name='quest' class="typeahead tt-query" id='sear' autocomplete="off" spellcheck="false" placeholder ='Ask A Question'>--> 
 <div id='headd'>
 <center><img src="vtweet_2.png" width="200px;" onload='onl()'></center>
 </div>

<div id="loader-wrapper">
  <div id="loader"></div>
  <script>
$(document).ready(function() {

    setTimeout(function() {
        $('body').addClass('loaded');
    }, 20);
 
});
</script>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  
</div>

<div id='spacer'></div>
<div id='headdd'>
  <div id='innerheaddd'>
    <center>
<table width="100%">
  <tr>
    <td align="center" width="13%"><button style="border:none;background-color: transparent;" id='wel-but' onclick='menu()'>
<?php
$k = $row[0];
echo "&nbsp<span id=wel>".$k."</span>";$date = date("Y-m-d");?></button>
<div id='drop-parent'>
<div id='drop'>
  <ul style="list-style: none;">
  <li><?php $k = $row[0];echo "&nbsp<span id=wel-wel>".$row."</span>";?></li>
  <li><?php echo "&nbsp<span id=wel-wel>".$_SESSION['user']."</span>";?><br><br><br></li>
  <li><a href="saved.php"><button id='saved-drop'>Saved</button></a></li>
  <li><form action='logout.php'><input type=submit value='Logout' id='logout-drop'></form></li>
<li><a href="Main_Pages/vchat.php"><button id='chat-but-drop'>Chat (BETA)</button></a></li>
</ul>
</div>
</div>
<td style="width:60%;">
<center>

<form action='question.php' method='POST'>
  <input type=hidden value="<?php echo $row; ?>" name='name'>
  <input type=hidden value="<?php echo $regid; ?>" name='regid'>
  <input type=hidden value='<?php echo $date; ?>' name='date'>
  <input type='text' style='width:95%;height:40px;' name='quest' class="typeahead tt-query" id='sear' autocomplete="off" spellcheck="false" placeholder ='Ask A Question'>
</form>

</center>

<td align="center" valign="center" style="width:15%;">

<span id='qa'>
Number of Questions Asked<br>
<?php 
$host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=0;
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $checkk = mysqli_query($conn,"SELECT * from question WHERE reg_id='$_SESSION[user]'");
          $counttt = 0;

            while($couu = mysqli_fetch_assoc($checkk))
            {
              if($_SESSION['user']==$couu['reg_id'])
              {
                $counttt++;
              }
            }
              echo "<span style='background-color:#328cc1;box-shadow: 2px 4px 8px 0 rgba(0,0,0,0.2);padding-left:15px;padding-right:15px;'>".$counttt."</span>";
            ?>
</span>

<td align="center" valign="center" style="width:15%;">
  <span id='qa'>
Number of Questions Answered<br>
<?php 
$host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=0;
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $checkk = mysqli_query($conn,"SELECT * from answer WHERE RegNo='$_SESSION[user]'");
          $counttt = 0;

            while($couu = mysqli_fetch_assoc($checkk))
            {
              if($_SESSION['user']==$couu['RegNo'])
              {
                $counttt++;
              }
            }
              echo "<span style='background-color:#328cc1;box-shadow: 2px 4px 8px 0 rgba(0,0,0,0.2);padding-left:15px;padding-right:15px;'>".$counttt."</span>";
            ?>
</span>
</tr>
</table>
<script>
window.onload = function()
{
  document.getElementById('drop').style.visibility = "hidden";
}
</script>
</center>
</div>
</div>

 <div id='spacer' style="height: 100px;"></div>

 <div id="content">


<center>





<!--<header>
  <div id='menu'>
<form action='question.php' method='POST'>
  <input type=hidden value="<?php echo $row; ?>" name='name'>
  <input type=hidden value="<?php echo $regid; ?>" name='regid'>
  <input type=hidden value='<?php echo $date; ?>' name='date'>
  <input type='text' style='width:80%;height:40px;' name='quest' class="typeahead tt-query" id='sear' autocomplete="off" spellcheck="false" placeholder ='Ask A Question'>
</form>

</div>
</header>-->





<div id='question_space'></div>


  <center>
  <div id='q' align=center></div>




    </center>

</div>

</center>
</div>

</body>
</html>

<?php
}
else{
  header('location:login.php');
}
?>
