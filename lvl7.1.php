<?php
session_start();
include 'config.php';

if(isset($_SESSION['email']))
{
	$que=mysql_query("SELECT level FROM member WHERE email='".$_SESSION['email']."'") or die("Could not execute query");
	$row=mysql_fetch_array($que);
	$lvl=$row['level'];
	
	if($lvl>=7)
	{
	if(isset($_POST['ans']))
	{
	$answer= $_POST['ans'];
	if($answer<=1000)
	{
			$qqq=mysql_query("UPDATE member SET level=8, dt='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['email']."'") or die("COuld not execute query");
			header('Location: lvl8.php');
			echo '<script>';
            echo 'alert("You got it right. leonardodavinci is an image..play with url..")';
            echo '</script>';
		}
		else{
		header('Location: lvl7.php');
		}
		}
?>
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