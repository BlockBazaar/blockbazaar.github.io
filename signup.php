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
			letter-spacing: 5px;
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
				randomString += characters.charAt(Math.floor(Math.random() * characters.length));
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
				} else {
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
		<div class="justify-content-center text-light" style="padding: 20px; background-color: rgba(0, 0, 32, 0.799);">
			<div class="header fs-1 fw-bold justify-content-center text-center">
				Sign Up
			</div>
			<div class="body">
				<div class="container-fluid">
					<div class="container" id="signUp">
						<form action="signUpResponse.php" method="post" align="center" onsubmit="return formValidate();">
							<div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-end">
								<div class="col-sm-5">
									<label class="form-label" for="fullName">
										<font style="color: red;">*</font>Full Name
									</label>
									<input type="text" class="form-control text-center" id="fullName" name="fullName" maxlength="100" required>
								</div>
								<div class="col-sm-5">
									<label class="form-label" for="email">
										<font style="color: red;">*</font>Email
									</label>
									<input type="email" class="form-control text-center" id="email" name='email' required>
								</div>
							</div>
							<div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-end">
								<div class="col-sm-5">
									<label class="form-label" for="contact">
										<font style="color: red;">*</font>Contact Number
									</label>
									<input type="tel" pattern="[0-9]{10}" class="form-control text-center" id="contact" name='contact' required>
								</div>
								<div class="col-sm-5">
									<label class="form-label" for="dob">
										<font style="color: red;">*</font>Date of Birth
									</label>
									<input type="date" class="form-control text-center" id="dob" name="dob" required>
								</div>
							</div>
							<div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-center">
								<div class="col-sm-auto">
									<label class="form-label" for="pswrd">
										<font style="color: red;">*</font>Password
									</label>
									<input type="password" class="form-control text-center" id="pswrd" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="100" required> <br>
									<input class="form-check-input" type="checkbox" value="" id="showPswrd" name="showPswd" onclick="showP()">
									<label class="form-check-label" for="showPswrd">
										Show Password
									</label>
								</div>
							</div>
							<div class="row gx-3 gy-2 justify-content-around align-items-end">
								<div class="form-text text-center" id="pswdHelpBlock" style="color: rgb(32, 255, 188);">
									Password must be of atleast 8 characters and must have atleast <br> 1 uppercase
									character, 1 lowercase character, 1 digit and 1 special character.
								</div>
							</div>
							<div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-end">
								<div class="col-sm-5">
									<label class="form-label" for="country">
										<font style="color: red;">*</font>Country
									</label>
									<input type="text" class="form-control text-center" id="country" name="country" maxlength="100" required>
								</div>
								<div class="col-sm-5">
									<label class="form-label" for="currency">
										<font style="color: red;">*</font>Currency
									</label>
									<select id="currency" name="currency" class="form-control text-center">
										<option value="USD">USD</option>
										<option value="EUR">EUR</option>
										<option value="INR">INR</option>
									</select>
								</div>
							</div>

							<div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-end">
								<div class="col-sm-5">
									<label class="form-label" for="address">
										<font style="color: red;">*</font>Address
									</label>
									<input type="text" class="form-control text-center" id="address" name="address" maxlength="200" required>
								</div>
								<div class="col-sm-5">
									<label class="form-label" for="zipCode">
										<font style="color: red;">*</font>Zip Code
									</label>
									<input type="text" class="form-control text-center" id="zipCode" name="zipCode" maxlength="9" required>
								</div>
							</div>

							<div class="row gx-3 gy-2 mt-2 justify-content-around align-items-end">
								<div class="col-sm-4">
									<label class="form-label" for="mainCaptcha">CAPTCHA</label>
									<input type="text" id="mainCaptcha" name="mainCaptcha" class="form-control text-center align-items-center" disabled />
								</div>
								<div class="col-sm-2">
									<br>
									<button type="button" name="refresh" class="btn btn-light align-content-center" value="Refresh" onclick="captcha();">
										<svg width="20" height="20" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
											<path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
										</svg>
									</button>
								</div>
								<div class="col-sm-4 mt-2">
									<div id="captchaHelpBlock" class="form-text align-content-center justify-content-around">
										Type the given characters <br>
									</div>
									<input type="text" class="form-control text-center justify-content-around" id="userCaptcha" name="userCaptcha">
								</div>
							</div>
							<div class="row gx-3 gy-2 mt-4 mb-2 align-items-center justify-content-around">
								<div class="col-sm-4">
									<a class="btn btn-primary me-md-2" target="_self" href="index.php" role="button">Back</a>
								</div>
								<div class="col-sm-2">
									<button type="reset" class="btn btn-primary me-md-2" value="reset" onclick="captcha()">Reset</button>
								</div>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-danger btn-primary me-md-2" data-bs-dismiss="modal" value="submit">Sign Up</button>
								</div>
							</div>
							<?php
							$dbhost = "remotemysql.com:3306";
							$dbuser = "gS467AnmlZ";
							$dbpass = "zW5EBWo1Q6";
							$db = "gS467AnmlZ";
							$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

							if (!$conn) {
								die('Could not connect: ' . mysqli_error());
							}
							$email = $_REQUEST["email"];
							if (isset($_POST('submit'))) {
								$query = "SELECT Email FROM usercredentials WHERE Email='$email'";
								$retval = mysqli_query($conn, $query);
								if (!$retval) {
									echo "<script type=javaScript>alert('User Already Exists')</script>";
								}
								mysqli_close($conn);
							}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>