<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>w-ces.V | Vehicle</title>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="../static/js/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="../static/js/slick/slick-theme.css"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../static/js/slick/slick.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../static/css/vehicle.css">

</head>
<body>
	<?php include('navbar.php'); ?>
	
	<div class="content" style="padding: 2em;">
    	<div class="alert alert-danger" id="nd" style="display: none;">
		  <strong>Error!</strong> This operation isn't suported yet.
		</div>
    	
    	<div class="container">
    		<h1>Jaguar</h1> 
    		<h3><i class="fa fa-money" aria-hidden="true"></i> <strong>R$ 200.00</strong> <i class="fa fa-clock-o" aria-hidden="true"></i> 24hrs de uso</h3>
    		
    		<hr>
    	    
    	    <div class="row">
    	    	<div class="col-md-2 profile_pic">
    	    		<img src="http://www.tulatours.com/AdminPanel/img/no_user.png"></img>
    	    	</div>
    	    	<div class="col-md-4">
    	    		<h4><i class="fa fa-user-o" aria-hidden="true"></i> Yuri Alessandro Martins</h4>
    	    		<h4>Média das ofertas: <i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></h4>
    	    	</div>
    	    </div>
    	    
    	    <hr>
    	    
    	    <div class="row">
    	        <div class="col-md-6 text-center">
    	            <div class="slider">
    	                <div>
    	                    <img class="offer-image" src="../static/images/car_example01/001.jpg">
    	                </div>
    	                <div>
    	                    <img class="offer-image" src="../static/images/car_example01/002.jpg">
    	                </div>
    	                <div>
    	                    <img class="offer-image" src="../static/images/car_example01/003.jpg">
    	                </div>
    	                <div>
    	                    <img class="offer-image" src="../static/images/car_example01/004.jpg">
    	                </div>
    	                <div>
    	                    <img class="offer-image" src="../static/images/car_example01/005.jpg">
    	                </div>
                    </div>
    	        </div>
    	        <div class="col-md-6 infos">
					<dl>
					  <dt><i class="fa fa-ellipsis-v" aria-hidden="true"></i> Tipo</dt>
					  	<dd> Carro</dd>
					  <dt><i class="fa fa-ellipsis-v" aria-hidden="true"></i> Categoria</dt>
					  	<dd> Sedan</dd>
					  <dt><i class="fa fa-car" aria-hidden="true"></i> Modelo</dt>
					  	<dd> Jaguar</dd>
					  <dt><i class="fa fa-ellipsis-v" aria-hidden="true"></i> Combustível</dt>
					  	<dd> Diesel</dd>
					  <dt><i class="fa fa-map-marker" aria-hidden="true"></i> Local</dt>
					  	<dd> Natal</dd>
		  			  <dt><i class="fa fa-thumb-tack" aria-hidden="true"></i> Cor</dt>
					  	<dd> Preto</dd>
					  <h4>
					  <dt><i class="fa fa-money" aria-hidden="true"></i> Valor</dt>
					  	<dd> <strong>R$ 200.00</strong> por 24hrs de uso</dd>
					  </h4>
					  
					  	<div class="stars">
							<form action="">
								<input class="star star-5" id="star-5" type="radio" name="star"/>
								<label class="star star-5" for="star-5"></label>
								<input class="star star-4" id="star-4" type="radio" name="star"/>
								<label class="star star-4" for="star-4"></label>
								<input class="star star-3" id="star-3" type="radio" name="star"/>
								<label class="star star-3" for="star-3"></label>
								<input class="star star-2" id="star-2" type="radio" name="star"/>
								<label class="star star-2" for="star-2"></label>
								<input class="star star-1" id="star-1" type="radio" name="star"/>
								<label class="star star-1" for="star-1"></label>
							</form>
						</div>
						<br>
						<button type="button" class="btn btn-lg btn-primary pull-right rent_a_car">Alugar</button>
				  		<!--<button type="button" class="btn btn-sm btn-danger pull-right">Denunciar</button>-->
					</dl>
    	        </div>
    	    </div>
	    	
    	    <hr>
    	    
    	    <h3><i class="fa fa-commenting-o" aria-hidden="true"></i> O que os nossos usuários dizem sobre esse veículo?</h3>
    	    
    	    <div class="fb-comments" data-href="wces.com" data-numposts="5" data-width="100%"></div>
    	    
    	    <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
    	    
    	</div>
    </div>
	
	<?php include('footer.php'); ?>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('.slider').slick({
			dots: true,
			infinite: true,
			speed: 2000,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2500,
			adaptiveHeight: true,
			centerMode: true,
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    },
		    ]
		});
		
		$('.rent_a_car').on('click', function(){
			$('#nd').show();	
		});
	});
	</script>
</body>