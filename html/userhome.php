<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>w-ces.V | Rent a car</title>

	<link rel="stylesheet" type="text/css" href="../static/css/reset2.css">
	<link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../static/css/userpage.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Roboto">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<?php include('navbar.php'); ?>
	
	<div class="userbar">
		<h1>Good morning, User!</h1>
		<ul class="userlinks">
			<li><a href="#">My profile</a></li>
			<li><a href="#">Open deals</a></li>
			<li><a href="#">Closed deals</a></li>
			<li><a href="#">Settings</a></li>
		</ul>
	</div>
	<div class="cardisplay">
		<div class="borrowdiv">
			<h2>Borrowed Vehicles</h2>
			<div>
				<a class="offer" href="#">
					<div class="offer-circle">
						<img class="offer-image" src="../static/images/car.jpg">
					</div>
					<div class="offer-info">
						<h4>Carro #1</h4>
						<p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/04/2017 <i class="fa fa-clock-o" aria-hidden="true"></i> 15:00</p>
						<p class="by">Alugado por Gustavo Araújo Carvalho</p>
						<p class="detail">Click to view in detail</p>
					</div>
				</a>

				<a class="offer" href="#">
					<div class="offer-circle">
						<img class="offer-image" src="../static/images/car.jpg">
					</div>
					<div class="offer-info">
						<h4>Carro #2</h4>
						<p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/04/2017 <i class="fa fa-clock-o" aria-hidden="true"></i> 15:00</p>
						<p class="by">Alugado por Gustavo Araújo Carvalho</p>
						<p class="detail">Click to view in detail</p>
					</div>
				</a>
			</div>
		</div>
		<div class="lentdiv">
			<h2>Lent Vehicles</h2>
			<div>
				<a class="offer" href="#">
					<div class="offer-circle">
						<img class="offer-image" src="../static/images/moto.jpg">
					</div>
					<div class="offer-info">
						<h4>Moto #1</h4>
						<p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/04/2017 <i class="fa fa-clock-o" aria-hidden="true"></i> 15:00</p>
						<p class="by">Alugado por Gustavo Araújo Carvalho</p>
						<p class="detail">Click to view in detail</p>
					</div>
				</a>

				<a class="offer" href="#">
					<div class="offer-circle">
						<img class="offer-image" src="../static/images/moto.jpg">
					</div>
					<div class="offer-info">
						<h4>Moto #2</h4>
						<p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/04/2017 <i class="fa fa-clock-o" aria-hidden="true"></i> 15:00</p>
						<p class="by">Alugado por Gustavo Araújo Carvalho</p>
						<p class="detail">Click to view in detail</p>
					</div>
				</a>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>