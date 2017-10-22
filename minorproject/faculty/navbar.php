<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style2.css">
</head>
<body>
<ul>
  <li><a href="fhomepage.php">Home</a></li>
  <li><a href="fassignments.php">Assignments</a></li>
  <li><a href="fresults.php">Results</a></li>
  <li><a href="fattendance.php">Attendance</a></li>
<li><a href="fnotice.php">Notices</a></li>
  <li style="float:right"  class="dropdown">
	<a href=""><?php echo $_SESSION['username'] ?></a>
	  <div class="dropdown-content">
      <a href="fprofile.php">Profile</a>
      <a href="../logout.php">Logout</a>
      </div>
	</li>
</ul>
</body>
</html>



