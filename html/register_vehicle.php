<!--VOOOOOOOOOOU FAZERRRR-->

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>w-ces.V</title>
		<!--fazer css dessa pagina-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../static/css/register_vehicle.css">
		<link rel="stylesheet" type="text/css" href="../static/css/reset2.css">


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!--<link rel="stylesheet" type="text/css" href="../static/css/navbar.css">-->
		<!--<link rel="stylesheet" type="text/css" href="../static/css/footer.css">-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>

	<body>
		<?php include('navbar.php'); ?>
		
		<div class="container-fluid">
				<p class="register-title"> Register vehicle</p>
				<div class="row">
					<div class="col-md-offset-4 col-md-4">
						<h2 id="confirmation"></h2>
					</div>
				</div>
				
				<div class="form-group row">
				  <label for="type" class="col-sm-offset-3 col-sm-1 col-form-label">Vehicle type:</label>
				  <div class="col-sm-2">
					  <select class="form-control" id="type">
					    <option>Car</option>
						<option>Motorcycle</option>
						<option>Bike</option>
					  </select>
				  </div>
				</div>
				
				<div class="form-group row">
		    	  <label for="category" class="col-sm-offset-3 col-sm-1 col-form-label">Category:</label>
		    	  <div class="col-sm-2">
					  <select class="form-control" id="category">
					    <option>Hatch</option>
						<option>Sedan</option>
						<option>SUV</option>
					  </select>
				  </div>
				</div>
				
				<div class="form-group row">
					<label for="model" class="col-sm-offset-3 col-sm-1 col-form-label">Model:</label>
					<div class="col-sm-2">
						<input type="text" name="model" id="model" class="form-control" onblur="validate('model')" onkeyup="validate('model')"/>
					</div>
					<div class="col-sm-3">
						<span id="modelMes"></span>
					</div>
				</div>
				
				<div class="form-group row">
				  <label for="fuel" class="col-sm-offset-3 col-sm-1 col-form-label">Fuel type:</label>
				  <div class="col-sm-2">
					  <select class="form-control" id="fuel">
					    <option>Gasoline</option>
						<option>Alcohol</option>
						<option>Diesel</option>
					  </select>
				  </div>
				</div>
				
				<div class="form-group row">
					<label for="city" class="col-sm-offset-3 col-sm-1 col-form-label">City:</label>
					<div class="col-sm-2">
						<input type="text" name="city" id="city" class="form-control" onblur="validate('city')" onkeyup="validate('city')"/>
					</div>
					<div class="col-sm-3">
						<span id="cityMes"></span>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="color" class="col-sm-offset-3 col-sm-1 col-form-label">Color:</label>
					<div class="col-sm-2">
						<input type="text" name="color" id="color" onblur="validate('color')" onkeyup="validate('color')"class="form-control"/>
					</div>
					<div class="col-sm-3">
						<span id="colorMes"></span>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="value" class="col-sm-offset-3 col-sm-1 col-form-label">Value: $</label>
					<div class="col-sm-1">
  						<input type="number" onblur="validate('value')" step="any" name="value" id="value" class="form-control input-sm" min="0"/>
					</div>
  					<label for="time" class="col-sm-1 col-form-label">for</label>
  					<div class="col-sm-1">
						<input type="number" onblur="validate('time')" name="time" id="time" class="form-control input-sm" min="1"/>
						<span id="timeMes"></span>
  					</div>
					<select class="col-sm-1 col-form-label input-sm" id="time_period" class="form-control">
				    	<option>hours</option>
						<option>days</option>
						<option>weeks</option>
				  	</select>
				</div>
				
				<div class="col-lg-offset-5 col-lg-10 register_button">
			        <button onclick="submit()">Register</button>
	     	 	</div>
				
		</div>

		<?php include('footer.php'); ?>
	</body>
	
	<script type="text/javascript">
            function hasSpecialCharacters(str) {
                var expr = /[*\\/|<>\"?:]/g;
                if (str.search(expr) > 0)
                    return true;
                else
                    return false;
            }
        
            function validate(fieldname) {
                var field = document.getElementById(fieldname);
                if (fieldname == "value") fieldname = "time";
                var message = document.getElementById(fieldname + "Mes");
                message.style.display = "inline-block";
                
                if (field.value == "") {
                    message.innerHTML = "This field must be filled";
                } else if (field.value.includes(" ")) {
                    message.innerHTML = "No spaces are allowed in this field";
                } else if (hasSpecialCharacters(field.value)) {
                    message.innerHTML = "No special characters are allowed on this field";
                } else {
                    message.innerHTML = "✓";
                    message.style.color = "green";
                    return true;
                }
                message.style.color = "red";
                return false;
            }
            
            function submit() {
            	var type = document.getElementById("type");
            	var category = document.getElementById("category");
                var model = document.getElementById("model");
                var fuel = document.getElementById("fuel");
                var city = document.getElementById("city");
                var color = document.getElementById("color");
                var price = document.getElementById("price");
                var time = document.getElementById("time");
                var period = document.getElementById("time_period");
            	
                var target = document.getElementById("confirmation");
                if (!validate("model") || !validate("city") || !validate("color") || !validate("value") || !validate("time")) {
                    target.innerHTML = "Error, data informed is inconsistent!";
                    return;
                }
                
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "../php/car_register.php", true);
                xhttp.setRequestHeader("Content-type", "application/json");
                
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var json = JSON.parse(this.responseText);
                        
                        target.innerHTML = this.responseText;
                        
                        if (json.status) {
                            document.getElementById("confirmation").innerHTML = "Cadastro com sucesso!";
                        } else {
                            // target.innerHTML = json.reason;
                            target.innerHTML = "Email already exists";
                        }
                    } else {
                        target.innerHTML = "Server communication failed!";
                    }
                };
                
                var timeHours = time.value;
                if (period.options[period.selectedIndex].text == "days") timeHours *= 24;
                if (period.options[period.selectedIndex].text == "weeks") timeHours *= 24*7;
                
                var data = {"operation" : "regvehicle",
                			// e.options[e.selectedIndex].text;
                            "type": type.options[type.selectedIndex].text,
                            "category": category.options[category.selectedIndex].text,
                            "model": model.value,
                            "fuel_type": fuel.options[fuel.selectedIndex].text,
                            "city": city.value,
                            "color": color.value,
                            "value": value.value,
                            "duration": timeHours,
                			"owner": "Anonymous"
                };
                xhttp.send(JSON.stringify(data));
            }
        </script>
</html>