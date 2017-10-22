<?php 
session_start();
include('navbar.php');
require 'dbconfig/connect.php';
?>

<!DOCTYPE html>
<html>
 <head> 
  <title>Attendence Record </title>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 </head>
 <body>

		<form class="myform" action="dispresults.php" method="post">
			<label><font color="white" size='3'>ID</font></label>
			<input name="ID" type="number" class="inputvalues" placeholder="Enter ID" required/>
			<input name= "submitbtn1" type="submit" id="signupbtn" value="Enter"/>
		</form>
<?php
			if(isset($_POST['submitbtn1']))
			{
				$id=$_POST['ID'];
				$query = "SELECT * FROM results where id = '$id'";
				$queryrun= mysqli_query($con,$query);
						if($queryrun)
						{
							echo '<script type="text/javascript">alert("Student Found")</script>';
						}
						else
						{
							echo '<script type="text/javascript">alert("Error!")</script>';
						}
				$name1 = "SELECT name FROM results where id = '$id'";
				$queryrun1= mysqli_query($con,$name1);
				$studname;
				//while($studname = mysqli_fetch_array($queryrun))
				//{
				//	$studname1 = $studname["name"];
				//	echo '<h2 align="center">'.$studname1.'\'s Attendence record of Sem 5</h2>';
				//	break;
				//}
			
$chart_data = '';
while($row = mysqli_fetch_array($queryrun))
{
 $chart_data .= "{ semester:'".$row["Semester"]."', OS:".$row["OS"].", MCES:".$row["MCES"].", CGVR:".$row["CGVR"].", BCE:".$row["BCE"].", OST:".$row["OST"].", ADBMS:".$row["ADBMS"].", CGPA:".$row["CGPA"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
}
?>

  <br /><br />
  <div class="container" style="width:900px;">
   <h3 align="center">Month wise distribution</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'semester',
 ykeys:['OS', 'MCES', 'CGVR', 'BCE', 'OST', 'ADBMS', 'CGPA'],
 labels:['OS', 'MCES', 'CGVR', 'BCE', 'OST', 'ADBMS', 'CGPA'],
 hideHover:'auto',
});
</script>
