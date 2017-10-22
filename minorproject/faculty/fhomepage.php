<?php session_start();?>
<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
<style>
body {
    background-image: url("https://images3.alphacoders.com/176/176787.jpg");
    background-repeat: no-repeat;
	background-size: 1370px 670px;
}
</style>
</head>
<body>

	<div id="main-wrapper">	
		<center>
			<font color="white"><h2>Home Page</h2></font>
			<font color="white"><h3>Welcome <?php echo $_SESSION['username'] ?></h3></font>
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform" action="fhomepage.php" method="post">
			
			<input name="logoutbtn" type="submit" id="logoutbtn" value="Logout"/>
	
		</form>

		<?php		
			$filename = '../notice.txt';
			$content = file_get_contents($filename);

			if( ! empty( $content ) )
			{
				echo '<br><br><div id="notice" style="font-size:30px;color:white;">NOTICES</div><br>';
    				echo '<div id="notice" style="font-size:20px;color:white;">'.$content.'</div>'; 
			}	
		?>	
		<?php
			if(isset($_POST['logoutbtn']))
			{
				session_destroy();
				header('location:../index.php');
			}
		?>
	</div>



</body>
</html>
