<html>
<head>
<title>Hack The Code</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
</head>
<body style="background: url(images/bg.png); background-size: 1400px 800px;background-repeat: no-repeat;">
<?php
session_start();
if(isset($_POST['submit']))
	{
		if($_POST['register'] == "localhost")
		{
			header('Location: registerplayer.php');
		}
		else
		{
			header('Location: register.php');
		}


}

	
?>
<div class="container">
			<ul class="nav nav-tabs">
			  <li role="presentation"><a href="leaderboard.php" target="_blank">Leaderboard</a></li>
			  <li role="presentation"><a href="https://www.facebook.com/upescsi/app_202980683107053" target="_blank">Forum</a></li>
			  <li role="presentation"><a href="logout.php">Logout</a></li>
			</ul><br>
	<p style="color: white;" align="center" > This is not a regular game you can easily enter. If you want to register yourself then you just got to decode this level first.</p>
<p style="color: white;" align="center">The Question is really simple.<br><b><u>Just name the place.</b></u><br>To find the place <a href="App_Data/register.zip" target="_blank">Click here</a></p>

	<form method="POST" action="register.php">
	<center><input type="text" name="register"></center>
	<Br>
	<center><input type="submit" value="Submit" name="submit"></center>
</form>
</div>
</body>
</html>