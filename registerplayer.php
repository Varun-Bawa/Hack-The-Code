<?php
session_start();
include 'config.php';
$flag = mysql_query("SELECT register FROM level WHERE email='".$_SESSION['email']."'");
$data = mysql_fetch_array($flag);

if(isset($_SESSION['email']))
{	
	if($data['register']==1)
	{
	header('Location: registerplayer.php');
	}
	else
	header('Location: register.php');
}
?>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
<title>Registration</title>
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
			  <li role="presentation"><a href="index.php">Login</a></li>
			  <li role="presentation"><a href="https://www.facebook.com/upescsi/app_202980683107053" target="_blank">Forum</a></li>
			  <li role="presentation"><a href="leaderboard.php">Leaderboard</a></li>
			</ul>
  <span href="#" class="button" id="toggle-login">Registration</span>
<div id="login">
	<form method="POST" action="regcheck.php">
		<input type="text" placeholder="Full Name" name="name" required/><br><br>
		<input type="text" placeholder="Email" name="email" required/><br>
		<input type="password" placeholder="Password" name="password" id="password" required/>
		<input type="password" placeholder="Confirm Password" name="confpassword" id="confpass" required/>
		<input type="submit" value="Register" onclick = "return validate()">
	</form>
</div>
<div id="message">
<?php
$str=$_SERVER['REQUEST_URI'];
$check=strpos($str, '?');
if($check)
	$msg=$_GET['msg'];
if(isset($msg))
{
	if($msg == 'success')
	{
		header('Location: index.php');
	}
	else if($msg == 'fail')
	{
		//echo "Sorry but you have not been registered. Please try again.";
		header('Location: registerplayer.php');
	}
	else if($msg == 'email')
	{
		//echo "Email already registered!";
		header('Location: registerplayer.php');
	}
}
?>
</div>
</div>
</body>

<script>
function validate()
{
	var password = document.getElementById("password").value;
	var confpass = document.getElementById("confpass").value;
	if(password == confpass)
	{
		return true;
	}
	else
	{
		alert("Passwords do not match!");
		return false;
	}
};
$('#toggle-login').click(function(){
  $('#login').toggle();
});
</script>
<script>

</script>
<script type="text/javascript" src="js/toggle.js"></script>
</html>
