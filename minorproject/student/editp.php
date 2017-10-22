<?php 
session_start();
include('navbar.php');
require 'dbconfig/connect.php';
?>
<html>
<head>
<title>Faculty Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2>Edit Profile</h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform" action="editp.php" method="post">
			<label><font color="white" size='3'>Name</font></label>
			<input name= "name" type="text" class="inputvalues" placeholder="Enter Name" required/>
			<label><font color="white" size='3'>ID</font></label>
			<input name="ID" type="number" class="inputvalues" placeholder="Enter ID" required/>
			<label><font color="white" size='3'>Department</font></label>
			<input name= "dept" type="text" class="inputvalues" placeholder="Enter department" required/>
			<label><font color="white" size='3'>Age</font></label>
			<input name="age" type="number" class="inputvalues" placeholder="Enter age" required/>
			<input name= "submitbtn1" type="submit" id="signupbtn" value="Enter"/>
		</form>	
		<?php
		
			if(isset($_POST['submitbtn1']))
			{	$id1 = $_POST['ID'];
				$check = "select * from profile where id = '$id1'";
				$checkrun = mysqli_query($con,$check);
				$name=$_POST['name']; $_SESSION['name']=$name;
				$id=$_POST['ID']; $_SESSION['id']=$id;
				$dept=$_POST['dept']; $_SESSION['dept']=$dept;
				$age=$_POST['age'];  $_SESSION['age']=$age;
			if(mysqli_num_rows($checkrun)>0)
			{
				$delquery = "delete from profile where id = '$id'";
				$delrun = mysqli_query($con,$delquery);
			}
				$query="insert into profile(name,id,department,age)values('$name','$id','$dept','$age')";
				$queryrun= mysqli_query($con,$query);
						if($queryrun)
						{
							echo '<script type="text/javascript">alert("Profile Updated Successfully")</script>';
						}
						else
						{
							echo '<script type="text/javascript">alert("Error!")</script>';
						}
			}	
				
			
		?>	
		
		
	</div>
	
</body>

</html>

