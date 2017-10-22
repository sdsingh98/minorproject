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
			<font color="white"><h2>Student Login</h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform" action="studentindex.php" method="post">
			<label><font color="white" size='3'>Username</font></label>
			<input name= "username" type="text" class="inputvalues" placeholder="Enter Username" required/>
			<label><font color="white" size='3'>Password</font></label>
			<input name= "password" type="password" class="inputvalues" placeholder="Enter Password" required/>
			<input name= "loginbtn" type="submit" id="loginbtn" value="Login"/>
			<a href= "sregister.php"><input type="button" id="registerbtn" value="Register"/>
	
		</form>		
		<?php
		if(isset($_POST['loginbtn']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				
				$query="select * from student_details where username='$username' and password='$password'";
				$queryrun= mysqli_query($con,$query);
				if(mysqli_num_rows($queryrun)>0)
				{
					$_SESSION['username']=$username;
					header('location:homepage.php');
					
					
				}
				else
				{
					echo '<script type="text/javascript">alert("Invalid Username or Password!")</script>';
				}
			}
			
		?>
	</div>



</body>
</html>
