<?php
function getVehiclesList($filename) {
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

function getVehiclesInfo($type) {
	$vehiArray = getVehiclesList($type);
	
	if (empty($vehiArray)) {
		echo "<h2 class=\"category-title\">There's no vehicle of this type in our database</h2>";
		return;
	}
	
	foreach($vehiArray as $vec) {
 		echo "<div class=\"col-md-3 offer-container\">\n";
	    echo "  <a href=\"vehicle.php\" class=\"offer\">\n";
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
		echo "  </a>\n";
 		echo "</div>\n";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>w-ces.V | Vehicle List</title>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	
	<link rel="stylesheet" type="text/css" href="../static/css/vehicle_list.css">
</head>
<body>
	<?php include('navbar.php'); ?>
	
	<div class="container">
	    <div class="content">
	        <h2 class="category-title">Cars for rent</h2>
		    <?php getVehiclesInfo("car");?>
	    </div>
	</div>
	
	<?php include('footer.php'); ?>
</body>