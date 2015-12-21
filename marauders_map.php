<?php
session_start();
include 'config.php';

if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=2)
	{
	if(isset($_POST['submit']))
	{
		if($_POST['lvl2answer'] == "isolemnlyswearthatiamuptonogood")
		{

			$qqq=mysql_query("UPDATE member SET level=2, dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die("COuld not execute query");
			header('Location: map.php');
		}
		else
		{
			header('Location: marauders_map.php');
		}


		}
?>
<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
	<title>Marauders Map</title>
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
			<center><h1>Level 2</h1></center>
	<form method="POST" action="marauders_map.php">
	<center><img src="images/lvl2/maraudersm.jpg" ></center><br><Br><br>
    <center><input type="text" name="lvl2answer"></center>
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