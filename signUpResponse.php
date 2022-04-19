<!DOCTYPE html>
<html lang="en">
<header>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url("./img/galaxyBackground.jpg");
			background-blend-mode: overlay;
			background-color: rgba(0, 0, 0, 0.269);
			height: 100%;
			width: 100%;
		}

		.mainDiv {
			display: inline-block;
			position: absolute;
			background-color: whitesmoke;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			width: 100%;
			height: fit-content;
			margin: auto;
			padding: 70px;
		}

		#particles-js canvas {
			display: block;
			position: fixed;
			z-index: -1;
		}

		#particles-js {
			position: fixed;
			width: 100%;
			height: 100%;
		}
	</style>
</header>

<body onload="bodyLoad()">
	<span id="particles-js">
	</span>
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	<div class="align-items-center container-fluid justify-content-center mainDiv" id="signUp">
		<div class="text-center justify-content-center">
			<div class="header fw-bold justify-content-center text-center" style="font-size: 36px; font-variant: small-caps;">
				<?php
				$dbhost = "remotemysql.com:3306";
				$dbuser = "gS467AnmlZ";
				$dbpass = "zW5EBWo1Q6";
				$db = "gS467AnmlZ";
				$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

				if (!$conn) {
					die('Could not connect: ' . mysqli_error());
				}
				$mail = $_REQUEST["email"];
				$query1 = "SELECT * from usercredentials WHERE Email='$mail'";

				$retval1 = mysqli_query($conn, $query);
				if (mysqli_num_rows($retval1) > 0) {
					echo "User Already Exists, Please Signin";
				} else {
					$name = $_REQUEST["fullName"];
					$con_num = $_REQUEST["contact"];
					$date = $_REQUEST["dob"];
					$password = $_REQUEST["pswd"];
					$country = $_REQUEST["country"];
					$address = $_REQUEST["address"];
					$zipcode = $_REQUEST["zipCode"];
					$currency = $_REQUEST["currency"];
					$query = "INSERT INTO usercredentials(FullName, Email, ContactNumber, DOB, Password, Country, Address, ZipCode, Currency) VALUES ('$name', '$mail', '$con_num', '$date', '$password', '$country', '$address', '$zipcode', '$currency')";

					$retval = mysqli_query($conn, $query);
					if (!$retval) {
						die('Could not enter data: ' . mysqli_error());
					}
					echo "Welcome to BlockBazaar";
				}
				mysqli_close($conn);
				?>
			</div>
			<p style="font-size: 24px; padding: 30px;">Enjoy shopping!</p>
			<a class="btn btn-primary me-md-2" target="_self" href="index.php" role="button" style="width: fit-content;">Get Started</a>
		</div>
	</div>
</body>