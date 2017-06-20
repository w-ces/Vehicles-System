<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>w-ces.V</title>

		<link rel="stylesheet" type="text/css" href="../static/css/signup.css">
		<link rel="stylesheet" type="text/css" href="../static/css/reset2.css">
		<link rel="stylesheet" type="text/css" href="../static/css/footer.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Roboto">
	</head>
	<body>
		<?php include('navbar.php'); ?>
		
		<div class="signup">
			<div class="signup">
				<p class="signup-title"> Sign up now!</p>
				
				<h2 id="confirmation"></h2>

				<label for="firstName">First Name:</label>
				<input id="firstName" name="firstName" type="text" onblur="validate('firstName')" onkeyup="validate('firstName')" placeholder="Your first name" />
				<span id="firstNameMes"></span>
				<br>
				
				<label for="lastName">Last Name:</label>
				<input id="lastName" name="lastName" type="text" onblur="validate('lastName')" onkeyup="validate('lastName')" placeholder="Your last name" />
				<span id="lastNameMes"></span>
				<br>
				
				<label for="birthday">Birthday:</label>
				<input id="birthday" name="birthday" type="date" />
				<!--<span id="birthdayMes"></span>-->
				<br>
				
				<label for="email">Email:</label>
				<input id="email" name="email" type="text" onblur="validate('email')" onkeyup="validate('email')" placeholder="Put yout email address..." required/>
				<span id="emailMes"></span>
				<br>
				
				<label for="password">Password:</label>
                <input id="password" name="password" type="password" onblur="validate('password')" onkeyup="validate('password')" />
                <span id="passwordMes"></span>
                <br>
				
				<label for="cpassword">Confirm Password:</label>
                <input id="cpassword" name="cpassword" type="password" onblur="checkPassword()" onkeyup="checkPassword()" />
                <span id="cpasswordMes"></span>
                <br>
				
				<label for="address">Address: </label>
				<input id="address" name="address" type="text" placeholder="Your address" />
				<span id="addressMes"></span>
				<br>

				<label for="country">Country:</label>
				<select id="country" name="country">
					<option>Brasil</option>
					<option>EUA</option>
				</select>
				
				<input type="button" name="submit" value="Sign Up" onclick="submit()" />
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
                var message = document.getElementById(fieldname + "Mes");
                message.style.display = "inline-block";
                
                if (field.value == "") {
                    message.innerHTML = "This field must be filled";
                } else if (field.value.includes(" ")) {
                    message.innerHTML = "No spaces are allowed in this field";
                } else if (hasSpecialCharacters(field.value)) {
                    message.innerHTML = "No special characters are allowed on this field";
                } else if (fieldname == "email" && field.value.indexOf("@") == -1) {
                    message.innerHTML = "Please input a valid email";
                } else {
                    message.innerHTML = "✓";
                    message.style.color = "green";
                    return true;
                }
                message.style.color = "red";
                return false;
            }
            
            function checkPassword() {
                var pass = document.getElementById("password");
                var cpass = document.getElementById("cpassword");
                var passmes = document.getElementById("cpasswordMes");
                passmes.style.display = "inline-block";
                
                if (cpass.value != pass.value) {
                    passmes.innerHTML = "Passwords don't match";
                    passmes.style.color = "red";
                } else {
                    passmes.innerHTML = "✓";
                    passmes.style.color = "green";
                }
                
                return cpass.value == pass.value;
            }
            
            function submit() {
                var target = document.getElementById("confirmation");
                if (!validate("firstName") || !validate("lastName") || !validate("email") || !validate("password") || !checkPassword()) {
                    target.innerHTML = "Error, data informed is inconsistent!";
                    return;
                }
                
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "../php/server.php", true);
                xhttp.setRequestHeader("Content-type", "application/json");
                
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var json = JSON.parse(this.responseText);
                        
                        target.innerHTML = this.responseText;
                        
                        if (json.status) {
                            document.getElementById("confirmation").innerHTML = "Cadastro com sucesso!";
                        } else {
                            target.innerHTML = json.reason;
                            // target.innerHTML = "Email already exists";
                        }
                    } else {
                        target.innerHTML = "Server communication failed";
                    }
                };
                
                var data = {"operation" : "signin",
                            "firstName": document.getElementById("firstName").value,
                            "lastName": document.getElementById("lastName").value,
                            "birthday": document.getElementById("birthday").value,
                            "email": document.getElementById("email").value,
                            "password": document.getElementById("password").value,
                            "address": document.getElementById("address").value,
                            "country": document.getElementById("country").value};
                
                xhttp.send(JSON.stringify(data));
            }
        </script>
</html>