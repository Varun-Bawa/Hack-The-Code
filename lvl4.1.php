<?php
session_start();
include 'config.php';
$ans1 = mysql_query("SELECT answer FROM questions WHERE qno=4");
$flag = mysql_query("SELECT lvl4 FROM level WHERE email='".$_SESSION['email']."'");
$data = mysql_fetch_array($flag);
$ans2 = mysql_fetch_array($ans1);
if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=4)
	{
	if(isset($_POST['submit']))
	{
		if($_POST['lvl4answer'] == $ans2['answer'])
		{
			$qqq=mysql_query("UPDATE member SET level=5, dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die("COuld not execute query");
			if($data['lvl4']==0)
			{
					$abc=mysql_query("UPDATE member SET score=score+30,dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die(mysql_error());
					$abc=mysql_query("UPDATE level SET lvl4=1 WHERE email='".$_SESSION['email']."'") or die(mysql_error());
			}
			header('Location: lvl5.php');
		}
		else
		{
			header('Location: lvl4.1.php');
		}


		}
?>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
	<title>Level 4</title>
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
			<center><h1>Level 4</h1></center>
	<form method="POST" action="lvl4.1.php">
	<center><img src="images/q4.png"></center><br><Br><br>
	<center><h3>You are Really Close!! Stay Focused!</h3></center><br><Br><br>
	<center><input type="text" name="lvl4answer"></center>
	<Br>
	<center><input type="submit" value="Submit" name="submit"></center>
</form>
</div>
<!-- Do Remember that we also love source code weather it be any site we can leave a comment!!! Best Of Luck-->
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