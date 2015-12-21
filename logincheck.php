<?php
session_start();
include 'config.php';
$email=$_POST['email'];
$pass=$_POST['password'];
$que=mysql_query("SELECT * FROM member WHERE email='".$email."' AND password='".$pass."'") or die("Could not execute query");
$cou=mysql_num_rows($que);
$value=mysql_fetch_array($que);
$lvl=$value['level'];
if($cou == 0)
{
	header('Location: index.php');
	//echo $cou;
	//echo $value;
}
else
{
	$_SESSION['email']=$email;
	//echo "Hello";
	$path = "Location: lvl".$lvl.".php";
	header($path);
}

?>