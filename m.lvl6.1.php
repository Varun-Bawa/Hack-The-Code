<?php
session_start();
include 'config.php';
$ans1 = mysql_query("SELECT answer FROM questions WHERE qno=6");
$flag = mysql_query("SELECT lvl6_1 FROM level WHERE email='".$_SESSION['email']."'");
$data = mysql_fetch_array($flag);
$ans2 = mysql_fetch_array($ans1);

if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=6)
	{
	if(isset($_POST['submit']))
	{
		if($_POST['lvl6answer'] == $ans2['answer'])
		{

			$qqq=mysql_query("UPDATE member SET level=7, dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die("COuld not execute query");
			if($data['lvl6_1']==0)
			{
					$abc=mysql_query("UPDATE member SET score=score+20,dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die(mysql_error());
					$abc=mysql_query("UPDATE level SET lvl6_1=1 WHERE email='".$_SESSION['email']."'") or die(mysql_error());
			}
			header('Location: lvl7.php');
		}
		else
		{
			header('Location: m.lvl6.1.php');
		}


		}
?>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
	<title>Level 6</title>
	<style>
		body { 
  background: url(images/bg.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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
			<center><h1>Level 6</h1></center>
	<form method="POST" action="m.lvl6.1.php">
	<center><img src="images/sud.jpg"></center><br><Br><br>
	<center><input type="text" name="lvl6answer"></center>
	<Br>
	<center><input type="submit" value="Submit" name="submit"></center>
</form>
</div>
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