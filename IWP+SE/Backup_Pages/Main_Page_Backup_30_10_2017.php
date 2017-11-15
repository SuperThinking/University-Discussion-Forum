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


<script type="text/javascript" src="send_ajax.js"></script>
<script>
  
/*function like(e){
  document.getElementById(e).src='like1.png';
  var n = '#'+e;
  alert(n);
    $.ajax({
        url:'like.php',
        type:'POST',
        data:$(n).serialize(),
        success:function(){
            alert("worked");
        }
    });
    return true;
}*/

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
                                //document.getElementById(but).src='nolike1.png';
                                //document.getElementById(but).onclick = 'like()';
                      
                      //change(e);  
                    }
                });
            });
            
            
            //document.getElementById(but).onclick = 'nolike()';
            //document.getElementById(haha).innerHTML = parseInt(document.getElementById(haha).innerHTML)+1;

            
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
                                //document.getElementById(but).src='nolike1.png';
                                //document.getElementById(but).onclick = 'like()';
                      
                      //change(e);        
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
            //document.getElementById(but).src='nolike1.png';
            //document.getElementById(but).onclick = 'like()';
  document.getElementById(haha).innerHTML = parseInt(document.getElementById(haha).innerHTML)-1;
}

</script>




<style>
#full
{
  background-color:#e89a55;/*#c66f21*/
    color: black;
    border-top: none;
    padding: 10px 25px;
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.6s;
    border-radius: 6px;

}

#ch{
    background-color:#D9853B;/*#c66f21*/
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
    height: 20%;
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
  border-radius: 8px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
#qq{
  font-family: 'Raleway';
}

body{
  

}

#wel{
  font-size: 20px;
  font-family: 'Raleway';
  background-color: #70adaa;
  background-size: 100%;
}

.menu{
  margin: 0;
  padding: 0;
  border: none;
  width: 100%;
  height: 80%;
}

textarea:focus, input:focus
{
    outline: none;
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
<body bgcolor='#558C89'>
  <!--<input type='text' name='quest' class="typeahead tt-query" id='sear' autocomplete="off" spellcheck="false" placeholder ='Ask A Question'>-->
 <center><img src="VTweet2.gif" width="577px;"></center>
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
<div id="content">

<?php
echo "<form action='logout.php'><hr>&nbsp<span id=wel>Welcome : ".$row."</span><input type=submit style='float:right;background-color:red;border: none;height:30px;' value='Logout' ></form><hr>";
  $date = date("Y-m-d"); #Date Function
?>



<center>



<div id="all_rows">
<form action='http://192.168.43.38/IWP+SE/Main_Pages/vchat.php' method=POST><button style='float:right;background-color:#333333;border: none;height:40px;color:white;'>Chat (BETA)</button></form>
  </script>

<header>
  <div id='menu'><!---->
<form action='question.php' method='POST'>
  <input type=hidden value="<?php echo $row; ?>" name='name'>
  <input type=hidden value="<?php echo $regid; ?>" name='regid'>
  <input type=hidden value='<?php echo $date; ?>' name='date'>
  <input type='text' style='width:80%;height:40px;' name='quest' class="typeahead tt-query" id='sear' autocomplete="off" spellcheck="false" placeholder ='Ask A Question'>
</form>

</div>
</header>

<a href="saved.php">
<input type=submit style='background-color:cyan;border:none;height:30px;' value='Saved' > 
</a>

<script>

window.onload=function magic()
{

document.getElementById('q').innerHTML = "<?php 
    $host='localhost';
          $dbuser='root';
          $pass='';
          $dbname='vreg';
          $i=0;
          $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
          $query = mysqli_query($conn, 'SELECT ques, Q_id, username, reg_id, Date FROM question ORDER BY DATE DESC, Q_id DESC');
          echo '<br><h2 id=qq>QUESTIONS</h2><br>';
          
          while($row = mysqli_fetch_assoc($query)) {

            

            echo '<div id=\'full\'><br>';
            $qu = $row['ques'];
            $no = $row['Q_id'];
            $user = $row['username'];
            $reg = $row['reg_id'];
            $qdate = $row['Date'];

            
            #echo '<button id=ch>'.$qu.'<br><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub></button></form></center><br>';
            $check = "SELECT * from likes where Q_id='$no' and RegNo='$regid'";
            $lala = mysqli_query($conn, $check);
            $data = mysqli_fetch_array($lala, MYSQLI_NUM);

            $lid = $regid.$no;
            $but = 's'.$lid;
            $fnl = 'formnolike'.$lid;
            $fl = 'formlike'.$lid;
            echo "<ul style='float:right;clear:both;list-style: none;'>";
            if($data[0]>0)
            {
              echo '<li><form id='.$lid.' name='.$lid.'><input type=hidden value='.$regid.' name=\'regid\'><input type=hidden value='.$no.' name=\'no\'><input type=\'image\' value='.$lid.' id='.$but.' src=\'like1.png\' width=\'50px\' onclick=\'nolike(this.value)\'></form>';
            }
            else
            {
              echo '<li><form id='.$lid.' name='.$lid.'><input type=hidden value='.$regid.' name=\'regid\'><input type=hidden value='.$no.' name=\'no\'><input type=\'image\' value='.$lid.' id='.$but.' src=\'nolike1.png\' width=\'50px\' onclick=\'like(this.value)\'></form>';
            }

            
            $check = mysqli_query($conn,"SELECT * from likes WHERE Q_id='$no'");
            $countt = 0;

            while($cou = mysqli_fetch_assoc($check))
            {
              if($no==$cou['Q_id'])
              {
                $countt++;
              }
            }
            $haha = 'c'.$lid;
            echo "<li><span id=".$haha." style='background-color:#ef903b;box-shadow: 2px 4px 8px 0 rgba(0,0,0,0.2);'>".$countt."</span></ul>";


            echo '<form action=\'answer.php\' method=POST><center><input type=hidden value='.$usus.' name=\'usus\'><input type=hidden value='.$no.' name=\'no\'><input type=hidden value='.$reg.' name=\'regofques\'><input type=hidden value='.$date.' name=\'date\'><input type=hidden value='.$passs.' name=\'mainpas\'><input type=hidden value='.$regid.' name=\'mainid\'><button id=ch>'.$qu.'<br><br><sub>&nbsp&nbsp&nbsp&nbspASKED BY : <u>'.$user.'</u>&nbsp&nbsp- <u>'.$reg.'</u></sub><br><br><sub>&nbsp&nbsp&nbsp&nbspAsked On : '.$qdate.'</button></form></center><br>';

            

            echo '</div><br><br>';

          }
?>";
}
</script>
  <center>
  <div id='q' align=center></div>




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