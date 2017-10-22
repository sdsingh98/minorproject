<?php 
session_start();
include('navbar.php');
require 'dbconfig/connect.php';
?>
<html>
<head>
<title>Results</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2>Results Input</h2></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform" action="fresults.php" method="post">
			<label><font color="white" size='3'>Name</font></label>
			<input name= "name" type="text" class="inputvalues" placeholder="Enter Name" required/>
			<label><font color="white" size='3'>ID</font></label>
			<input name="ID" type="number" class="inputvalues" placeholder="Enter ID" required/>
			<label><font color="white" size='3'>Semester</font></label>
			<input name="semester" type="number" class="inputvalues" placeholder="Enter Semester" required/>
			<label><font color="white" size='3'>OS</font></label>
			<input name="OS" type="number" class="inputvalues" placeholder="Enter OS marks" required/>
			<label><font color="white" size='3'>MCES</font></label>
			<input name="MCES" type="number" class="inputvalues" placeholder="Enter MCES marks" required/>
			<label><font color="white" size='3'>CGVR</font></label>
			<input name="CGVR" type="number" class="inputvalues" placeholder="Enter CGVR marks" required/>	
			<label><font color="white" size='3'>BCE</font></label>
			<input name="BCE" type="number" class="inputvalues" placeholder="Enter BCE marks" required/>
			<label><font color="white" size='3'>OST</font></label>
			<input name="OST" type="number" class="inputvalues" placeholder="Enter OST makrs" required/>	
			<label><font color="white" size='3'>ADBMS</font></label>
			<input name="ADBMS" type="number" class="inputvalues" placeholder="Enter ADBMS marks" required/>		
			<input name= "submitbtn1" type="submit" id="signupbtn" value="Enter"/>
		</form>	
		<?php
		
			if(isset($_POST['submitbtn1']))
			{
				$name=$_POST['name'];
				$id=$_POST['ID'];
				$semester=$_POST['semester'];
				$os=$_POST['OS'];
				$mces=$_POST['MCES'];
				$cgvr=$_POST['CGVR'];
				$bce=$_POST['BCE'];
				$ost=$_POST['OST'];
				$adbms=$_POST['ADBMS'];
				(float)$cgpa = ((($os+$mces+$cgvr+$bce+$ost+$adbms)/600)*100)/9.5;
				$query="insert into results(Name,ID,Semester,OS,MCES,CGVR,BCE,OST,ADBMS,CGPA)values('$name','$id','$semester','$os','$mces','$cgvr','$bce','$ost','$adbms','$cgpa')";
				$queryrun= mysqli_query($con,$query);
						if($queryrun)
						{
							echo '<script type="text/javascript">alert("Results Entered Successfully")</script>';
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
