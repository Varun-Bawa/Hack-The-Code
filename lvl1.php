<?php
session_start();
include 'config.php';
$ans1 = mysql_query("SELECT answer FROM questions WHERE qno=1");
$flag = mysql_query("SELECT lvl1 FROM level WHERE email='".$_SESSION['email']."'");
$data = mysql_fetch_array($flag);
$ans2 = mysql_fetch_array($ans1);
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
if(isset($_POST['submit']))
	{
		if($_POST['lvl1answer'] == $ans2['answer'])
		{	
			$qqq=mysql_query("UPDATE `member` SET `level`=2,`dt`='".date('Y-m-d H:i:s')."' WHERE `email`='".$_SESSION['email']."'") or die("COuld not execute query");
			if($data['lvl1']==0){
			$abc=mysql_query("UPDATE member SET score=score+20,dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die(mysql_error());
			$abc=mysql_query("UPDATE level SET lvl1=1 WHERE email='".$_SESSION['email']."'") or die(mysql_error());
			}
			header('Location: lvl2.php');
		}
		else
		{
			header('Location: lvl1.php');
		}


}

if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=1)
	{
	
?>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
	<title>Level 1</title>
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
			<center><h1>Level 1</h1></center>
	<form method="POST" action="lvl1.php">
	<p><center>This Level is Damn Easy!!!</center></p>
	<center><input type="text" name="lvl1answer"></center>
	<Br>
	<!-- What never asks questions but is often answered? -->
	<center><input type="submit" value="Submit" name="submit"></center>
</form>
</div>
</body>
</html>
<?php
}
else
{
	//echo "Inside here";
	header('Location: lvl'.$lvl.'.php');
}
}
else
{
	header ('Location: index.php');
}
?>