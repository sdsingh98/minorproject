<?php 
session_start();
include('navbar.php');
require 'dbconfig/connect.php';
$id = $_SESSION['id'];
$query = "SELECT * FROM results where id = '$id'";
$result = mysqli_query($con, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ semester:'".$row["Semester"]."', OS:".$row["OS"].", MCES:".$row["MCES"].", CGVR:".$row["CGVR"].", BCE:".$row["BCE"].", OST:".$row["OST"].", ADBMS:".$row["ADBMS"].", CGPA:".$row["CGPA"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
 
 
<!DOCTYPE html>
<html>
 <head>
  <title>Results </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center"><?php echo $_SESSION['username'] ?>'s results</h2>
   <h3 align="center">Semester wise distribution</h3>   
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
