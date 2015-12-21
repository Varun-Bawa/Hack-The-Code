<?php
include 'config.php';

$email = $_POST['email'];
$name = $_POST['name'];
$pass = $_POST['password'];
$level = 1;
$score=10;

$get=mysql_query("SELECT * FROM member WHERE email='".$email."'") or die("Could not execute query");
$num = mysql_num_rows($get);
if($num!=0)
{
	
	header('Location: registerplayer.php?msg=email');
}
else
{
$que=mysql_query("INSERT INTO member VALUES('$email', '$name', '$pass', '10', '1','". date('Y-m-d H:i:s')."')") or die("COuld not execute query");
$lvl=mysql_query("INSERT INTO level VALUES('$email', '0', '0','0', '0','0', '0','0', '0','0', '0','0', '0','0', '0','0','0','0')") or die("COuld not execute query");
if($que)
{
	
	header('Location: index.php?msg=success');
}
else
{
	header('Location: registerplayer.php?msg=fail');
}
}

?>