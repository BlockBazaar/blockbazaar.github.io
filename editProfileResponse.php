<?php
require 'conn.php';
session_start();
?>
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
			background-image: url("./img/signup.webp");
			background-blend-mode: overlay;
			background-color: rgba(0, 0, 0, 0.671);
			height: 100%;
			width: 100%;
		}

		.mainDiv {
			display: inline-block;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			width: max-content;
			height: 100%;
			margin: auto;
			border-width: 1px;
			border-radius: 20px;
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

		.form-control,
		.btn {
			border-radius: 20vh;
		}

		h2 {
			background-color: orangered;
			color: white;
			padding: 1vh;
			border-radius: 20vh;
		}

		a:hover {
			background-color: bisque;
			opacity: 0.7;
		}
	</style>
</header>

<body>
	<span id="particles-js">
	</span>
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	<div class="align-content-center justify-content-center rounded-3 mainDiv" id="signUp">
		<div class="justify-content-center text-light" style="padding: 20px; background-color: rgb(54, 54, 54);">
			<h2 class="d-flex align-items-center justify-content-center">Profile Update</h2>
			<div class="body">
				<?php
				require 'conn.php';


				if (!$con) {
					die('Could not connect: ' . mysqli_error());
				}
				$bbid = $_SESSION['BlockBazaarID'];
				$name = $_REQUEST["fullName"];
				$email = $_REQUEST["email"];
				$con_num = $_REQUEST["contact"];
				$date = $_REQUEST["dob"];
				$password = $_REQUEST["pswd"];
				$country = $_REQUEST["country"];
				$state = $_REQUEST["state"];
				$address = $_REQUEST["address"];
				$zipcode = $_REQUEST["zipCode"];
				$query2 = "UPDATE usercredentials SET FullName ='$name', Email = '$email', ContactNumber = '$con_num', DOB = '$date', Password = '$password', Country = '$country', State = '$state', Address = '$address', ZipCode = '$zipcode' WHERE BlockBazaarID = '$bbid'";
				$retval2 = mysqli_query($con, $query2);

				echo "<h4 style=''padding: 12vh 0 0 0;'>Thank You. Your Account has been succesfully created.</h4>";
				echo "<h6 class='d-flex justify-content-center align-items-center' style='padding: 10vh 0 3vh 0;'><a class='btn' style='color:rgb(179, 179, 179); background-color: rgba(0, 0, 0, 0.377)' href='profile.php'> Get Started Now</a></h6>";
				echo "<h6 class='d-flex justify-content-center align-items-center' style='padding: 10vh 0 3vh 0; font-size: smaller'>Best Wishes from BlockBazaar</h6>";

				mysqli_close($con);
				?>
			</div>
		</div>
	</div>
</body>

</html>