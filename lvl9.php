<?php
session_start();
include 'config.php';

if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=9)
	{
	if(isset($_POST['submit']))
	{
		if($_POST['lvl9answer'] == "chariahebdo")
		{

			$qqq=mysql_query("UPDATE member SET level=10, dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die("COuld not execute query");
			header('Location: lvl10.php');
		}
		else
		{
			header('Location: lvl9.php');
		}


		}
?>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
	<title>Level 9</title>
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
			<center><h1>Level 9</h1></center>
	<form method="POST" action="lvl9.php">
	<center><img src="images/aaa.jpg"></center><br><Br><br>
	<center><input type="text" name="lvl9answer"></center>
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