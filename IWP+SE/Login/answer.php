<?php
session_start();

$pass=$_SESSION['pass'];
  $regid=$_SESSION['user'];
  $usus=$_SESSION['usus'];
  $row=$_SESSION['usus'];
  $passs=$_SESSION['user'];
?>
<head>
  <link rel="stylesheet" href="cssfather.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

<link rel="stylesheet" href="cssfather.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">




<style>



#postans:focus
{
  outline: 0;
}
#postans:hover
{
  cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

ul.columns {
 width: 960px;
 list-style: none;
 margin: 0 auto; padding: 0;
}
ul.columns li {
 width: 220px;
 display: inline;
 margin: 10px; padding: 0;
 position: relative;
}
ul.columns li:hover {z-index: 99;}


ul.columns li input[type='image'] {
 position: relative;
 filter: alpha(opacity=50);
 opacity: 0.5;
 -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=30)"; /*--IE8 Specific--*/
}
ul.columns li:hover input[type='image']{
 z-index: 999;
 filter: alpha(opacity=100);
 opacity: 1;
 -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

ul.columns li .info {
 position: absolute;
 left: -1px; top: -10px;
 padding: 50px 10px 20px;
 width: 220px;
 display: none;
 background: #fff;
 font-size: 1.2em;
 -webkit-border-radius: 3px;
 -moz-border-radius: 3px;
 border-radius: 3px;
}
ul.columns li:hover .info {display: block;}
 
ul.columns li h2 {
 font-size: 1.2em;
 font-weight: normal;
 text-transform: uppercase;
 margin: 0; padding: 10px 0;
}
ul.columns li p {padding: 0; margin: 0; font-size: 0.9em;}









#content {
  margin: 0 auto;
  padding-bottom: 50px;
  width: 80%;
  max-width: 978px;
}


.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}





#myBtn{
  background-color: #f7f7f7;
  border-top: none;
    padding: 10px 25px;
    text-align: center;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 3px;
    font-size: 25px;
    background-repeat: no-repeat; 
    background-size: 200px;
}


#qq{
  font-family: 'Raleway';
}

body{
  

}

#jsbutton{
  background-color:#e1e7ef;
    color: black;
    border-top: none;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
#jsbutton:hover{
  cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


#wel{
  font-size: 20px;
  font-family: 'Raleway';
  background-color: #d7dde5;
  background-size: 100%;
}

.menu{
  margin: 0;
  padding: 0;
  border: none;
  width: 100%;
  height: 80%;
}

textarea:focus, input:focus{
    outline: none;
}

button:focus{
  outline : none;
}

#ch{
    background-color:#e1e7ef;
    color: black;
    border-top: none;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 20px;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 3px;
}

#ch:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


#chuser{
    background-color:#d0fdef;
    color: black;
    border-top: none;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 20px;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 3px;
}

#chuser:hover{
  cursor:hand;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

#edit_box
{
  display: block;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
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

#spacer
{
  height:85px;
}
</style>



<script>

function edit(v)
{
  document.getElementById('edit_div').innerHTML = '<div id=\'edit_box\'><textarea rows="4" cols="50" style="height:100px;width:80%;border-radius:5px;margin-top:0px;aria-multiline:true;" style=\'width:80%;\'></textarea></div>';
}

</script>

<script>
 function cook(a){
            
            $(a).submit(function(a){
                a.preventDefault();
                $.ajax({
                    url:'done.php',
                    type:'GET',
                    data:$(a).serialize(),
                    success:function(){
                      window.location = "http://localhost/IWP+SE/Login/Main_Page.php";
                    }
                });
            });
            
            

        }
</script>

</head>
<body bgcolor='#1D2731'>

 <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!- -->
 <div id='headd'>
 <center><img src="vtweet_2.png" width="200px;"></center>
 </div>

<div id='spacer'></div>
 <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!- -->


<div id="content">
  <?php
  $host='localhost';
  $dbuser='root';
  $pass='';
  $dbname='vreg';
  $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
  $query1 = mysqli_query($conn, "SELECT Name FROM registration where RegNo = '$_SESSION[user]' and Password = '$_SESSION[pass]'");
  $row1 = mysqli_fetch_array($query1);
  echo "<form action='logout.php'><hr>&nbsp<span id=wel>Welcome : ".$_SESSION['usus']."</span><input type=submit style='float:right;background-color:red;border: none;height:30px;' value='Logout'></form><hr>";
  ?>
  <center>
<?php
          $count = 0;
          $no = $_POST['no'];
          $host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $query = mysqli_query($conn, "SELECT ques, username, reg_id FROM question where Q_id=$_POST[no]");
          $row = mysqli_fetch_array($query);
          $qu = $row['ques'];
          $user = $row['username'];
          $reg = $row['reg_id'];
          $regofques = $_POST['regofques'];
          echo "<h2 align=center id='myBtn' name=ch".$no.">".$qu."</h2><br><br>";
          $ansquery = mysqli_query($conn, "SELECT Answer, RegNo, username, ans_id from answer where Q_id=$_POST[no]");
          while($row1 = mysqli_fetch_array($ansquery)){
            $ans = $row1['Answer'];
            $re = $row1['RegNo'];
            $us = $row1['username'];
            $anid = $row1['ans_id'];
            if($re==$_POST['mainid'])
            {
              echo "<form action = 'editme.php' method='POST'>";
              echo "<input type='hidden' name='id' value=".$anid.">";
              echo "<input type='hidden' name='ans' value=\"".$ans."\">";

              echo '<center><button id=chuser value=\''.$anid.'\'>'.$ans.'<br><br><sub>&nbsp&nbsp&nbsp&nbsp~'.$us.' ('.$re.') </sub></button></center><br>';
              
              echo "</form>";
              $count++;
            }
            else
            {
              echo '<center><button id=ch>'.$ans.'<br><br><sub>&nbsp&nbsp&nbsp&nbsp~'.$us.' ('.$re.') </sub></button></center><br>';
              $count++;
            }
          }
          if(($_POST['mainid']==$regofques))
          {
            echo "<form action='deleteques.php' method='POST'><ul class='columns'>
    <li style='float:left;'>
    <input type='hidden' value=".$_POST['no']." name='del_id' />
     <input type='image' name='submit' src='delete.png' width='50px' alt='X' />
        <div class='info'>
            <h2>Delete Question</h2>
        </div>
    </li>
    </ul></form>";
          }

          echo "<form action='savepost.php' method='POST'><ul class='columns'>
    <li style='float:right;'>
    <input type=hidden value=".$no." name=idd />
     <input type='image' name='submit' src='pin.png' width='50px' alt='SAVE' />
        <div class='info'>
            <h2>Save</h2>
        </div>
    </li>
    </ul></form>";
?>


<div id='myModal' class='modal'>

  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><form action='done.php' method='GET' name='yahi' id='yahi'>
      <input type='hidden' name='pass' value="<?php echo $_POST['mainpas']; ?>">
      <input type='hidden' name='regid' value="<?php echo $_POST['mainid']; ?>">
      <input type='hidden' name='qid' value="<?php echo $no; ?>"> 
      <input type='hidden' name='usus' value="<?php echo $_POST['usus']; ?>"> 
      <textarea rows="4" cols="50" style="height:100px;width:100%;border-radius:5px;margin-top:0px;
      aria-multiline:true;" placeholder='Your Answer Goes Here' name='ans' style='width:80%;'></textarea>
      <br><br>
      <input type="submit" name="submit" value="POST ANSWER>" style="border-left: 2px;border-right: 2px;border-radius: 3px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;" id='postans'>
      <!--<input type="image" src='like.png' id='jsbutton' onclick="return cook('#yahi')">--></form></p>
  </div>

</div>

<div id='edit_div'></div>


<script>
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</center>

</div>


</body>