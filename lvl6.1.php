<?php
session_start();
include 'config.php';
$flag = mysql_query("SELECT lvl6 FROM level WHERE email='".$_SESSION['email']."'");
$data = mysql_fetch_array($flag);

if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=6)
	{
	if($data['lvl6']==0)
		{
			header('Location: lvl6.php');
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
			<p>Are you good in Sudoku?<br>Solve it to get the answer.<br>You know where the question is!! :-)</p>
</div>
<?php
echo '<script type="text/javascript">';
echo 'if (screen.width <= 699) document.location = "m.lvl6.1.php";';
echo '</script>';
?>
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