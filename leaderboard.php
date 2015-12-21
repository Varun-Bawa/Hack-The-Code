<?php
session_start();
include 'config.php';

$que = mysql_query("SELECT * FROM member ORDER BY score DESC, dt");

?>
<html>
<head>
	<title>Leaderboard</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="css/demo.css" />
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>
	<style>
		body { 
  background: url(images/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

	</style>
</head>
<body>
<div id="page">
			<div class="header">
				<a href="#menu"></a>
				HACK THE WEB
			</div>
			<nav id="menu">
				<ul>
					<li><a href="#">Level 1</a></li>
					<li><a href="#">Level 2</a></li>
					<li><a href="#">Level 3</a></li>
					<li><a href="#">Level 4</a></li>
					<li><a href="#">Level 5</a></li>
					<li><a href="#">Level 6</a></li>
					<li><a href="#">Level 7</a></li>
					<li><a href="#">Level 8</a></li>
					<li><a href="#">Level 9</a></li>
					<li><a href="#">Level 10</a></li>
					<li><a href="#">Level 11</a></li>
					<li><a href="#">Level 12</a></li>
					<li><a href="#">Level 13</a></li>
					<li><a href="#">Level 14</a></li>
					<li><a href="#">Level 15</a></li>
					<li><a href="#">Level 16</a></li>
					<li><a href="#">Level 17</a></li>
					<li><a href="#">Level 18</a></li>
					<li><a href="#">Level 19</a></li>
					<li><a href="#">Level 20</a></li>
					
				</ul>
			</nav>
		</div>
	<div class="container">
		<center><h1>Leaderboard</h1></center>
		<br>
<table class="table">
	<tr>
		<td>Name</td>
		<td>College</td>
		<td>Score</td>
		
	</tr>
	<?php
		while($row = mysql_fetch_array($que))
		{
			?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['score']; ?></td>
				
			</tr>
			<?php
		}
	?>
</table>
</div>
</body>
</html>

	