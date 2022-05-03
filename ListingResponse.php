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
			background-blend-mode:overlay;
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

		#mainCaptcha {
			background-color: #e5e5f7;
			opacity: 9.0;
			background-size: 4px 4px;
			background-image: repeating-linear-gradient(45deg, #444cf7 0, #444cf7 0.4px, #e5e5f7 0, #e5e5f7 50%);
			color: rgb(58, 3, 187);
			font-style: oblique;
			font-family: cursive;
			font-size: larger;
		}
		.form-control, .btn{
			border-radius: 20vh;
		}
		h2{
            background-color: orangered;
            color: white;
            padding: 1vh;
            border-radius: 20vh;
        }
		a:hover{
			background-color: bisque;
			opacity: 0.7;
		}
	</style>
	<script>

		function bodyLoad() {
			captcha();
			dateRange();
		}
		function captcha() {
			var randomString = "";
			var characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz!@#$%&()+=-<>/?[]{}";

			for (var i = 0; i < 6; i++) {
				randomString += " " + characters.charAt(Math.floor(Math.random() * characters.length));
			}
			document.getElementById('mainCaptcha').value = randomString;
			document.getElementById('userCaptcha').value = "";
		}

		function dateRange() {
			var dt = new Date();
			var dd = dt.getDate();
			var mm = dt.getMonth() + 1; //January is 0!
			var yyyy = dt.getFullYear() - 13;

			if (dd < 10) {
			dd = '0' + dd;
			}

			if (mm < 10) {
			mm = '0' + mm;
			} 
				
			dt = yyyy + '-' + mm + '-' + dd;
			document.getElementById("dob").setAttribute("max", dt);
		}

		function showP() {
			var x = document.getElementById('pswrd');
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}

		function formValidate() {
			var mainCaptcha = document.getElementById('mainCaptcha').value;
			var userCaptcha = document.getElementById('userCaptcha').value;
			if (mainCaptcha != userCaptcha) {
				alert("Invalid captcha");
				return false;
			} else {
				var msg = "Are you sure you want to submit this form and all provided details are correct?";
				if (confirm(msg) === true) {
					return true;
				}
				else {
					return false;
				}
			}
		}

	</script>
</header>

<body onload="bodyLoad()">
	<span id="particles-js">
	</span>
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	<div class="align-content-center justify-content-center rounded-3 mainDiv" id="signUp">
		<div class="justify-content-center text-light" style="padding: 20px; background-color: rgb(54, 54, 54);">
			<h2 class="d-flex align-items-center justify-content-center">Product Listing</h2>
			<div class="body">
				<h4 style="padding: 12vh 0 0 0;">Thank You. Your Product has been succesfully listed.</h4>
				<h6 class="d-flex justify-content-center align-items-center" style="padding: 10vh 0 3vh 0;"><a class="btn" style="color:rgb(179, 179, 179); background-color: rgba(0, 0, 0, 0.377)" href="catalogue.php"> Go to Marketplace</a></h6>
				<h6 class="d-flex justify-content-center align-items-center" style="padding: 10vh 0 3vh 0; font-size: smaller">Best Wishes from BlockBazaar</h6>
			</div>
		</div>
	</div>
</body>

</html>
