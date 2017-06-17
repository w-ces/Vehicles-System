<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>w-ces.V</title>

		<link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
		<link rel="stylesheet" type="text/css" href="../static/css/signup.css">
		<link rel="stylesheet" type="text/css" href="../static/css/reset2.css">
		<link rel="stylesheet" type="text/css" href="../static/css/footer.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Roboto">
	</head>
	<body>
		<?php include('navbar.php'); ?>
		
		<div class="signup">
			<form class="signup">
				<p class="signup-title"> Sign up now!</p>

				<label for="first_name">First Name:</label>
				<input type="text" name="first_name" placeholder="Your first name" />
				<br>

				<label for="last_name">Last Name:</label>
				<input type="text" name="last_name" placeholder="Your last name" />
				<br>

				<label for="birthday">Birthday:</label>
				<input type="date" name="birthday">
				<br>

				<label for="email">Email: </label>
				<input type="text" name="email" placeholder="Put yout email address..." required/>
				<br>

				<label for="address">Address:</label>
				<input type="text" name="address" placeholder="Your address">
				<br>

				<label for="country">Country:</label>
				<select name="country">
					<option>Brasil</option>
					<option>EUA</option>
				</select>
				
				<input type="submit" name="submit" value="Sign Up"/>
			</form>
		</div>

		<?php include('footer.php'); ?>
	</body>
</html>