<?php
function getShortVehiclesList($filename) {
    $arr = array();
    $file=fopen("../database/" . $filename . ".txt", r) or die("unable to open file!");
    $counter = 0;
    while(!feof($file) and $counter < 10) {
        $readLine = fgets($file);
        if ($readLine != "") {
            $readVeh = json_decode($readLine);
            $arr[] = $readVeh;
            $counter = $counter + 1;
        }
    }
    return $arr;
}

function getVehiclesInfo($type) {
	$vehiArray = getShortVehiclesList($type);
	
	if (empty($vehiArray)) {
		echo "<h2 class=\"category-title\">There's no vehicle of this type in our database</h2>";
		return;
	}
	
	foreach($vehiArray as $vec) {
	    echo "<a href=\"vehicle.php\" class=\"offer\">\n";
		echo "	<div>\n";
		echo "		<div class=\"offer-circle\">\n";
		echo " 			<img class=\"offer-image\" src=\"../static/images/" . $type . ".jpg\">\n";
		echo " 		</div>\n";
		echo " 		<br>\n";
		echo "		<div class=\"offer-title\">" . $vec->modelo . "</div>\n";
		echo " 			<br>\n";
		echo " 			<div class=\"offer-value\">\$" . $vec->preco . ",00</div> - <STRONG>" . $vec->duracao . "hrs</STRONG> of usage\n";
		echo " 			<br>\n";
		echo " 			<div class=\"offer-info\">" . $vec->dono . "</div> in " . $vec->local . "\n";
		echo " 			<br>\n";
		echo " 	</div>\n";
		echo "</a>\n";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>w-ces.V | Rent a car</title>

	<link rel="stylesheet" type="text/css" href="../static/css/reset2.css">
	<link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../static/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../static/css/rentarcar.css">
	<link rel="stylesheet" type="text/css" href="../static/js/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="../static/js/slick/slick-theme.css"/>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../static/js/slick/slick.min.js"></script>

</head>
<body>
	<?php include('navbar.php'); ?>

	<div class="searchfield">
		<form action="#">
			<input type="text" name="searchcar" placeholder="Search your favorite car model..."/>
			<input type="submit" value="Search">
		</form>
	</div>
	
	<div class="title">
		<h2> Find your ideal vehicle </h2>
		<p> Check out the best options for you </p>
	</div>
	
	<div class="content">
		<a href="vehicle_list.php"><h2 class="category-title">Cars</h2></a>
		<div class="catalogue"><?php getVehiclesInfo("car")?></div>
	
		<a href="vehicle_list.php"><h2 class="category-title">Bycicles</h2></a>
		<div class="catalogue"><?php getVehiclesInfo("bike")?></div>
	
		<a href="vehicle_list.php"><h2 class="category-title">Motorcycles</h2></a>
		<div class="catalogue"><?php getVehiclesInfo("moto")?></div>
	</div>

	<?php include('footer.php'); ?>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('.catalogue').each(function() {
			if ($(this).html().substring(0,3) != "<h2")
				$(this).slick({
					dots: true,
					infinite: true,
					speed: 1000,
					slidesToShow: 4,
					slidesToScroll: 4,
					responsive: [
						{
							breakpoint: 1025,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3,
								infinite: true,
								dots: true
							}
						},
						{
							breakpoint: 601,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 481,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
					]
				});
		})
	});
	</script>
	
</body>
</html>