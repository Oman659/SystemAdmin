<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="Style/design2.css">
<body>



		

		
		<?php

			include 'connection.php';

		?>

		<?php

			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$email = $_POST['username'];
			$pass = $_POST['password'];
			$bday = $_POST['birthdate'];
			$sex = $_POST['gender'];
			

		if (isset($_POST['signbtn'])){
			


			$select = "SELECT * FROM tblFacebook WHERE Mobile_email = '$email'";
			$result =mysqli_query($connect,$select);
			$num = mysqli_num_rows($result);



			if ($num == TRUE) {
				echo "Email Already Taken";
			}
			else{
				$Insert = "INSERT INTO tblFacebook (Firstname, Lastname, Mobile_email, Password, Birthday, Gender) VALUES ('$firstname', '$lastname', '$email', '$pass', '$bday', '$sex')";
				$query = mysqli_query($connect, $Insert);

				$logemail = $_POST['email'];
				$logpass = $_POST['loginpass'];

				$sqlUpdate = "UPDATE tblFacebook set Email = '$email', Logpass = '$pass' WHERE Mobile_email = '$email' ";
				$update = mysqli_query($connect,$sqlUpdate);
		

				echo "ADDED";
			}
		}
		
		?>


		



		<?php

			session_start();
			//Log in

			if (isset($_POST['logbtn'])) {

			$logemail = $_POST['email'];
			$logpass = $_POST['loginpass'];

			$logquery ="SELECT *FROM tblFacebook WHERE Email = '$logemail' AND Logpass = '$logpass'";
			$Display = mysqli_query($connect,$logquery);
			$login = mysqli_num_rows($Display);

			if ($login == TRUE) {
				$_SESSION['email'] = $logemail;
				header('location:result.php');
				
			}
			else{
				header('location:facebook.php');
			}


			
		}
	

									

		?>






</body>
</html>

