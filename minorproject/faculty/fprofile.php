<?php
	session_start();
	require 'dbconfig/connect.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2>Profile</h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform1" action="editp.php" method="post">
			<a href= "editp.php"><input type="button" id="signupbtn" value="Edit Profile"/>
		</form>
		<form class="myform2" action="dispp.php" method="post">
			<a href= "dispp.php"><input type="button" id="signupbtn" value="Display Profile"/>
		</form>			
	</div>



</body>
</html>
