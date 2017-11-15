<?php
session_start();
$pass=$_SESSION['pass'];
  $regid=$_SESSION['user'];
  $usus=$_SESSION['usus'];
  $row=$_SESSION['usus'];
  $passs=$_SESSION['user'];
?>
<head>
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
</head>
<body>


	<?php 
    $host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=0;
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $query = mysqli_query($conn, "SELECT ques, Q_id, username, reg_id, Date FROM question WHERE reg_id='$regid' ORDER BY DATE DESC, Q_id DESC");
          echo "<br><div id='qdiv'><h2 id=qq align='center'>OPEN AND DELETE THE QUESTIONS IF ANSWERED</h2></div><br>";
          
          while($row = mysqli_fetch_assoc($query)) {

            

            echo '<div id=\'full\'><br>';
            $qu = $row['ques'];
            $no = $row['Q_id'];
            $user = $row['username'];
            $reg = $row['reg_id'];
            $qdate = $row['Date'];

            #echo '<button id=ch>'.$qu.'<br><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub></button></form></center><br>';


            echo '<form action=\'answer.php\' method=POST><center><input type=hidden value='.$usus.' name=\'usus\'><input type=hidden value='.$no.' name=\'no\'><input type=hidden value='.$reg.' name=\'regofques\'><input type=hidden value='.$passs.' name=\'mainpas\'><input type=hidden value='.$regid.' name=\'mainid\'><button id=ch><h3>'.$qu.'</h3><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub><br><br><sub>&nbsp&nbsp&nbsp&nbspAsked On : '.$qdate.'</button></form></center><br>';

            echo '</div><br><br>';

          }
?>
</body>