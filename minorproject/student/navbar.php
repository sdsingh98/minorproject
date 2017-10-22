<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style2.css">
</head>
<body>
<ul>
  <li><a href="shomepage.php">Home</a></li>
  <li><a href="sassignments.php">Assignments</a></li>
  <li><a href="sresults.php">Results</a></li>
  <li><a href="sattendence.php">Attendance</a></li>
  <li style="float:right"  class="dropdown">
	<a href=""><?php echo $_SESSION['username'] ?></a>
	  <div class="dropdown-content">
      <a href="sprofile.php">Profile</a>
      <a href="../logout.php">Logout</a>
      </div>
	</li>
</ul>
</body>
</html>



