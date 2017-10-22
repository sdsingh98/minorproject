
<?php session_start();?>
<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Notices</title>
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
			<font color="white"><h2>Notice Page</h2></font
			<img src="imgs/8-512.png" class="avatar"/>
		</center>
		<form class="myform" action="fnotice.php" method="post">
			<textarea name="content"></textarea>
			<input name="logoutbtn" type="submit" id="logoutbtn" value="Add to Notices"/>
	
		</form>		
		<?php
			if(isset($_POST['logoutbtn']))
			{
				$filename = '../notice.txt';
				$content = file_put_contents( $filename, $_POST['content'] );
			}
		?>
	</div>
</body>
</html>
