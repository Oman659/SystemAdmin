<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="Style/design2.css">
<body>

	<?php

	session_start();


	include 'connection.php';


	
	?>

		<center><h1>Welcome <?php echo $_SESSION['email'];?><br>

	
		<a href="facebook.php"><button type="submit" name="logoutbtn">Log out</button></a>
		
</body>
</html>