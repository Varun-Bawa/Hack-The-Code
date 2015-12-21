<?php

session_start();
include 'config.php';
if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$data = mysql_fetch_array($que);
	$level = $data['level'];
	if($level>=26)
	{
	?>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
	<title>Level 25</title>
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
			<center><h3>Congratulations! You have completed all the levels of Hack The Code!</h3>
			<p>Click below to check the leaderboard and your position.</p>
			<p><button class="btn">Leaderboard</button></p>
			</body>
			</html>
	<?php
}
else
{
	header('Location: lvl'.$level.'.php');
}
}
else
{
	header('Location: index.php');
}
?>