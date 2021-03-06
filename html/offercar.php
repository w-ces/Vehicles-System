<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>w-ces.V</title>

		<link rel="stylesheet" type="text/css" href="../static/css/reset2.css">
		<!-- <link rel="stylesheet" type="text/css" href="../static/css/home.css"> -->
		<link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
		<link rel="stylesheet" type="text/css" href="../static/css/footer.css">
		<link rel="stylesheet" type="text/css" href="../static/css/offercar.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Roboto">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	</head>
	<body>
		<?php include('navbar.php'); ?>

		<div class="sub-navbar">
			<ul class="sub-menulinks">
				<li><a href="#vehicles">Vehicles</a></li>
				<li><a href="#talks">Talks</a></li>
			</ul>
		</div>

		<a href="register_vehicle.php">
		<div class="new-offer">
			<div>
				<h3 class="button-title">Start now by offering your car for other users</h3>
			</div>
			<div>
				<p class="button-desc">Define the period in which your car will be available for rent, stipulate a value per hour used, negotiate directly with your customer. All with guaranteed safety and simplicity.</p>
			</div>
		</div>
		</a>

		<div id="vehicles">
			<h3 class="session-title">Your registred vehicles</h3>
			
			<?php
				function getVehicles($filename) {
				    $arr = array();
				    $file=fopen("../database/" . $filename . ".txt", r) or die("unable to open file!");
				    while(!feof($file)) {
				        $readLine = fgets($file);
				        if ($readLine != "") {
				            $readVeh = json_decode($readLine);
				            $arr[] = $readVeh;
				        }
				    }
				    
				    return $arr;
				}
				
				$vehicles = getVehicles("vehi");
				$cont = 1;
				foreach($vehicles as $vec) {
					echo '<a class="offer" href="#">
							<div class="offer-circle">
								<img class="offer-image" src="../static/images/car.jpg">
							</div>
							<div class="offer-info">
								<h4>Car #' . $cont++ . '</h4>';
				    echo '<p class="car_model">Modelo: ' . $vec->modelo . '</p>';
				    echo '<p class="car_price">Preço: $' . $vec->preco . '</p>';
					echo '<p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/04/2017 <i class="fa fa-clock-o" aria-hidden="true"></i> 15:00</p>
								<p class="by">Alugado por Gustavo Araújo Carvalho</p>
								<p class="detail">Click to view in detail</p>
							</div>
						</a>';
						
				}
			
			
			?>

			<div id="talks">
				<h3 class="session-title">Your talks</h3>
			</div>
		</div>

		<?php include('footer.php'); ?>
	</body>
</html>

<script type="text/javascript">
	
</script>