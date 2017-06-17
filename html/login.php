<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>w-ces.V</title>

		<link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
		<link rel="stylesheet" type="text/css" href="../static/css/login_page.css">
		<link rel="stylesheet" type="text/css" href="../static/css/reset2.css">
		<link rel="stylesheet" type="text/css" href="../static/css/footer.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Roboto">
	</head>
	<body>
		<?php include('navbar.php'); ?>
		
		<div class="login_page">
			<form class="login_page_form" action="userhome.php">
				<p class="login-title"> Sign in to start renting!</p>
				<label for="first_name">Email:</label>
				<input type="text" name="email" placeholder="Email" required />
				<br>
				<label for="last_name">Password:</label>
				<input type="password" name="password" placeholder="Password" required />
				<br>
				<input type="checkbox" name="checkbox" checked="checked"> Remember me
				<br>
				<input type="submit" name="submit" id="submit_button" value="Login"/>
			</form>
		</div>
		
		<?php include('footer.php'); ?>
	</body>
</html>