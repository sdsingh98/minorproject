<?php 
session_start();
include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Attendance</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2></h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform1" action="inputattendance.php" method="post">
			<a href= "inputattendance.php"><input type="button" id="signupbtn" value="Input Student Attendance"/>
		</form>
		<form class="myform2" action="dispattendance.php" method="post">
			<a href= "dispattendance.php"><input type="button" id="signupbtn" value="Display Student Attendance"/>
		</form>			
	</div>



</body>
</html>
