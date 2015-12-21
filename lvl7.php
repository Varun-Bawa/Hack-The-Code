<?php
session_start();
include 'config.php';

if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	if($lvl>=7)
	{
		if(isset($_POST['ans']))
		{
			$answer= $_POST['ans'];
			echo $answer;
			if($answer)
			{
				$qqq=mysql_query("UPDATE member SET level=8, dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die("COuld not execute query");
				echo 'sfdgg';
				echo '<script>';
				echo 'alert("You got it right. leonardodavinci is an image..play with url..")';
				echo '</script>';
				//header('Location: lvl8.php');
				
			}
		}
		
?>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<link rel="stylesheet" href="css/style1.css">
	<title>Level 7</title>
	<style>
		body { 
  background: url(images/bg.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.number{
		font-style: italic;
		color: blue;
		font-size: 50px;
}	
	</style>
	</head>
	<body>
		<div class="container">
			<ul class="nav nav-tabs">
			  <li role="presentation"><a href="leaderboard.php" target="_blank">Leaderboard</a></li>
			  <li role="presentation"><a href="https://www.facebook.com/upescsi/app_202980683107053" target="_blank">Forum</a></li>
			  <li role="presentation"><a href="logout.php">Logout</a></li>
			</ul>
			<center><h1>Level 7</h1></center>
</div>
<center>
<p class="number">Stop The Counter at 1000</p>
<p id="timer" style="font-size: 70px; color: blue;"></p>
<center>
<button id="pause" class="button" onclick="PauseFunction()">Stop</button>
<a href="#" id="text-id">Send text</a>
<?php
if (function_exists('date_default_timezone_set'))
{
 date_default_timezone_set('Asia/Calcutta');
 
}
$abc = date('Y-m-d h-i-s');
echo "var fruit = $abc;";
?>
<script>
var pause=0;
var count=0;
var abcde=1000;
var counter=setInterval(timer, 1);
function timer()
{
  count=count+1;
  document.getElementById("timer").innerHTML=count; 
}

function PauseFunction()
{
    if (pause==0) 
    {
      clearInterval(counter);
      document.getElementById("pause").innerHTML="Submit";
      pause=1;
	  $.ajax({
            type:"post",
            url:"lvl7.php",
            data:  "ans="+count,
            success:function(count){
                /*window.location = "lvl7.php"; */
            console.log('Successful login for: ' + count);
			}
        });

      return;
    }
else
  if (pause==1) 
    {
		console.log('hey');
	}
  return;
}
</script>
</body>
</html>
<?php
}
else
{
	header('Location: lvl'.$lvl.'.php');
}
}
else
{
	header ('Location: index.php');
}
?>