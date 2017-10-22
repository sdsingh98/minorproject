<?php
	require 'dbconfig/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2>Registration Form</h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform" action="register.php" method="post">
			<label><font color="white" size='3'>Username</font></label>
			<input name= "username" type="text" class="inputvalues" placeholder="Enter Username" required/>
			<label><font color="white" size='3'>Password</font></label>
			<input name="password" type="password" class="inputvalues" placeholder="Enter Password" required/>
			<label><font color="white" size='3'>Confirm Password</font></label>
			<input name= "cpassword" type="password" class="inputvalues" placeholder="Confirm Password" required/>
			<input name= "submitbtn" type="submit" id="signupbtn" value="Sign Up"/>
			<a href="index.php"><input type="button" id="backbtn" value="<<Back to Login"/>
		</form>	
		<?php
		
			if(isset($_POST['submitbtn']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
			
				if($password==$cpassword)
				{
					$query="select * from student_details where username='$username'";
					$queryrun= mysqli_query($con,$query);
				
					if(mysqli_num_rows($queryrun)>0)
					{
						echo '<script type="text/javascript">alert("User already exist...choose a different Username")</script>';
					}
					else
					{
						$query= "insert into student_details values('$username','$password')";
						$queryrun= mysqli_query($con,$query);
						if($queryrun)
						{
							echo '<script type="text/javascript">alert("User Registerd Sucessfully....Go to Login Page to proceed")</script>';
						}
						else
						{
							echo '<script type="text/javascript">alert("Error!")</script>';
						}
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm password does not match")</script';
				}
			}	
				
			
		?>	
		
		
	</div>
	
</body>

</html>