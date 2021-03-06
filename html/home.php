<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>w-ces.V</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="../static/css/home.css">
		<!--<link rel="stylesheet" type="text/css" href="../static/css/navbar.css">-->
		<!--<link rel="stylesheet" type="text/css" href="../static/css/footer.css">-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Slab">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

		<script>
			$(document).on('click', 'a[href^="#"]', function(e) {
			    var id = $(this).attr('href');
			    var $id = $(id);
			    if ($id.length === 0) {
			        return;
			    }
			    e.preventDefault();
			    var pos = $id.offset().top;
			    $('body, html').animate({scrollTop: pos});
			});
		</script>

	</head>
	<body>
		<?php include('navbar.php'); ?>

		<div class="container-fluid">
			<div class="row buttondad">
				<a href="rentacar.php">
					<div class="col-md-6 leftdiv">
						<div class="img-overlay">
			                <img src="../static/images/home2.jpeg" class="image"/>
			                <div class="project-overlay-left infos">
			                	<p class="info-title">Rent a Vehicle</p>

								<p class="info-subtitle">Escape from car rental companies!</p>

								<p class="info-description">Choose the best and most suitable vehicle for you</p>

								<ul class="info-reasons">
									<li> Reason one</li>
									<li> Reason two</li>
									<li> Reason three</li>
								</ul>
			                </div>
			            </div>
					</div>
				</a>
				
				<a href="offercar.php">
					<div class="col-md-6 rightdiv">
						<div class="img-overlay"	>
			                <img src="../static/images/home3.jpeg" class="image"/>
			                <div class="project-overlay-right infos">
								<p class="info-title">Offer your Vehicle</p>

								<p class="info-subtitle">Get your vehicle in motion. Get something in return!</p>

								<p class="info-description">Earn extra cash by offering your vehicle to others</p>

								<ul class="info-reasons">
									<li> Reason one</li>
									<li> Reason two</li>
									<li> Reason three</li>
								</ul>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>



		<div class="howitworks" id="howitworks">
			<h2>How it works</h2>
			
			<div class="container-fluid text-center">
				<div class="row">
					<div class="col-md-3 htw">
						<p class="icon"><i class="fa fa-key" aria-hidden="true"></i></p>
						<p class="icon-msg">Offer your vehicle to other users</p>
					</div>
					
					<div class="col-md-3 htw">
						<p class="icon"><i class="fa fa-search" aria-hidden="true"></i></p>
						<p class="icon-msg">Search for offered vehicles</p>
					</div>
					
					<div class="col-md-3 htw">
						<p class="icon"><i class="fa fa-car" aria-hidden="true"></i></p>
						<p class="icon-msg">Rent the best vehicle for you</p>
					</div>
					
					<div class="col-md-3 htw">
						<p class="icon"><i class="fa fa-money" aria-hidden="true"></i></p>
						<p class="icon-msg">Make money renting vehicles</p>
					</div>
				</div>
			</div>
			
			<br>
			
			<p class="long-text">w-ces.V is a collaborative vehicles renting system. Using principles of 
			shared economy, we offer an online platform to serve as an interface for 
			people around the world who want to rent their own vehicles and/or look up to
			 rent any sort of vehicles with a more fair cost.</p>

			<p class="long-text">Trying to figure out how to give some use to that bike you don't ride anymore? 
			Stay-at-home weekend and want to get some extra cash from your unused car? On w-ces.V
			 you can easily offer your vehicle for renting purposes for the price you wish, 
			 facing no great charges and guaranteed security. All you have to do is sign up. </p>

			<p class="long-text">Looking for a car to use for a couple of days? On w-ces.V you can search in our offers 
			to find all sorts of vehicles (cars, motorcycles, bikes and more) near a specific location, 
			to facilitate your renting experience. Also, you can negotiate the price directly with the 
			vehicle's owner and use our system to pay for it with security guaranteed. All you have to do is sign up.</p>

			<p class="long-text">No bureaucracy. No expensive fares. Renting vehicles from users to users.</p>

		</div>
		<!--<div class="abaoutus" id="aboutus">-->
		<!--	<h2>About us</h2>-->
		<!--	<p class="long-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
		<!--		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
		<!--		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
		<!--		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse-->
		<!--		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non-->
		<!--	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->

		<!--	<p class="long-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
		<!--		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
		<!--		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
		<!--		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse-->
		<!--		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non-->
		<!--	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->

		<!--	<p class="long-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
		<!--		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
		<!--		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
		<!--		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse-->
		<!--		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non-->
		<!--	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->

		<!--	<p class="long-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
		<!--		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
		<!--		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
		<!--		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse-->
		<!--		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non-->
		<!--	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
		<!--</div>-->
		
		<?php include('footer.php'); ?>
	</body>
</html>