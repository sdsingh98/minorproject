<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style2.css">
</head>
<body>
<ul>
  <li><a href="http://localhost/minorproject/homepage.php">Home</a></li>
  <li><a href="http://localhost/minorproject/assignments.php">Assignments</a></li>
  <li><a href="http://localhost/minorproject/results.php">Results</a></li>
  <li><a href="http://localhost/minorproject/attendence.php">Attendance</a></li>
  <li style="float:right"  class="dropdown">
	<a href=""><?php echo $_SESSION['username'] ?></a>
	  <div class="dropdown-content">
      <a href="http://localhost/minorproject/profile.php">Profile</a>
      <a href="http://localhost/minorproject/logout.php">Logout</a>
      </div>
	</li>
</ul>
</body>
</html>



