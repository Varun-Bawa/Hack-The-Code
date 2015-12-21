<?php
include 'config.php';

$email = $_POST['email'];
$name = $_POST['name'];
$level = 1;
$score=10;
$get=mysql_query("SELECT * FROM member WHERE email='".$email."'") or die("Could not execute query");
$num = mysql_num_rows($get);
if($num!=0)
{
	echo "email";
}
else
{
$que=mysql_query("INSERT INTO member (email, name, score, level, dt) VALUES('$email', '$name', 10, 1,'". date('Y-m-d H:i:s')."')") or die(mysql_error());

if($que)
{
	
	echo "success";
}
else
{
	echo "fail";
}
}

?>