<?php 
session_start();
include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2></h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform1" action="inputresults.php" method="post">
			<a href= "inputresults.php"><input type="button" id="signupbtn" value="Input Student Results"/>
		</form>
		<form class="myform2" action="dispresults.php" method="post">
			<a href= "dispresults.php"><input type="button" id="signupbtn" value="Display Student Results"/>
		</form>			
	</div>



</body>
</html>

