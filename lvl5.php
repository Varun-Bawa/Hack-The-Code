<?php
session_start();
include 'config.php';
$ans1 = mysql_query("SELECT answer FROM questions WHERE qno=5");
$flag = mysql_query("SELECT lvl5 FROM level WHERE email='".$_SESSION['email']."'");
$data = mysql_fetch_array($flag);
$ans2 = mysql_fetch_array($ans1);
if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=5)
	{
	if(isset($_POST['submit']))
	{
		if($_POST['lvl5answer'] == $ans2['answer'])
		{

			$qqq=mysql_query("UPDATE member SET level=6, dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die("COuld not execute query");
			if($data['lvl5']==0)
			{
					$abc=mysql_query("UPDATE member SET score=score+20,dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die(mysql_error());
					$abc=mysql_query("UPDATE level SET lvl5=1 WHERE email='".$_SESSION['email']."'") or die(mysql_error());
			}
			header('Location: lvl6.php');
		}
		else
		{
			header('Location: lvl5.php');
		}


		}
?>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
<script type="text/javascript" src="js/lvl5.js"></script>
<title>Level 5</title>
	<style>
		body { 
  background: url(images/bg.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.cross-out {text-decoration: line-through;cursor:default;}

#image{
    margin:0px 0px;
    transform-origin:50% 100%;
}
#image1{
    margin:0px 0px;
    transform-origin:50% 100%;
}
#image2{
    margin:0px 0px;
    transform-origin:50% 100%;
}
#image3{
    margin:0px 0px;
    transform-origin:50% 100%;
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
			<center><h1>Level 5</h1></center>
</div>
<center><img src="images/q5.png" id="image" style="position:absolute; top: 280px; left: 450px; z-index: 1;"></center>
<ul>
    <li><a href="#" class="real">R1 Right</a></li>
	<li><a href="#" class="real">R1 Left</a></li>
</ul>
<img src="images/r1.png" id="image1" style="position:absolute; top: 280px; left: 450px; z-index: 2;"></center>
<ul>
    <li><a href="#" class="real">R2 Right</a></li>
	<li><a href="#" class="real">R2 Left</a></li>
</ul>
<img src="images/r2.png" id="image2" style="position:absolute; top: 280px; left: 450px; z-index: 3;"></center>
<ul>
    <li><a href="#" class="real">R3 Right</a></li>
	<li><a href="#" class="real">R3 Left</a></li>
</ul>
<img src="images/r3.png" id="image3" style="position:absolute; top: 280px; left: 450px; z-index: 4;"></center>
<audio id="audio">
    <source id="oggSource" src="lvl5.ogg" type="audio/ogg"></source>
    Your browser does not support the audio format.
</audio>
<?php
echo '<script>';
echo 'var value = 0;';
echo '$( "li" ).click(function() {';
echo    ' var text=$(this).text();';
echo    ' if(text==="R1 Right"){value+=3;}';
echo    ' if(text==="R1 Left"){value-=3;}';
echo    ' $("#image1").rotate({ animateTo:value});';
echo 	'if(value==180)';
echo  '   {	playaud();} });';
echo 'var value1 = 0;';
echo '$( "li" ).click(function() {';
echo   '  var text=$(this).text();';
echo  '   if(text==="R2 Right"){value1+=3;}';
echo '    if(text==="R2 Left"){value1-=3;}';
echo '    $("#image2").rotate({ animateTo:value1});'; 
echo' 	if(value1==120)';
echo '    {	playaud();}});';
echo 'var value2 = 0;';
echo '$( "li" ).click(function() {';
echo     'var text=$(this).text();';
echo     'if(text==="R3 Right"){value2+=3;}';
echo    ' if(text==="R3 Left"){value2-=3;}';
echo    ' $("#image3").rotate({ animateTo:value2});';
echo 	'if(value2==300)';
echo  '   {		playaud();}});';
echo 'var aud = document.getElementById("audio");'; 
echo '		function playaud()';
echo '		{ 	aud.play(); };';
echo '</script>';
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form method="POST" action="lvl5.php">
	<center><input type="text" name="lvl5answer"></center>
	<center><input type="submit" value="Submit" name="submit"></center>
</form>
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