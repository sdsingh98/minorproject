<?php
	session_start();
	require 'dbconfig/connect.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2>Login</h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform1" action="student/studentindex.php" method="post">
			<a href= "student/studentindex.php"><input type="button" id="signupbtn" value="Student Login"/>
		</form>
		<form class="myform2" action="facultyindex.php" method="post">
			<a href= "faculty/facultyindex.php"><input type="button" id="signupbtn" value="Faculty Login"/>
		</form>			
	</div>



</body>
</html>
