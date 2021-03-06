<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link href="style_sheets/home.css" rel="stylesheet">
	<style>

	</style>
</head>

<body>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light">
		<div class="container-fluid">
			<a class="navbar_brand" href="#">
				<img class="logo" src="img/bb-logo.png" alt=""/>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="main_nav">
				<ul class="navbar-nav">
					<li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
					<li class="nav-item"><a class="nav-link" href="#about"> About </a></li>
					<li class="nav-item"><a class="nav-link" href="#"> Purchase Guide </a></li>
					<li class="nav-item"><a class="nav-link" data-bs-toggle="modal" href="#loginModal" id="login"> Log
							In </a></li>
				</ul>
			</div>
			<!-- navbar-collapse.// -->
		</div>
		<!-- container-fluid.// -->
	</nav>
	<div class="modal fade align-content-center" id="loginModal">
		<div class="modal-dialog modal-dialog-centered justify-content-center">
			<div class="modal-content" style="border-radius: 20px; width: auto;">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="color: rgb(57, 73, 143);">Login</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class="container-fluid">
						<div class="container" id="login">
							<form action="authentication.php" method="post" name="loginform">
								<div class="form-outline mb-3 mt-3">
									<label class="form-label" for="bbid">BlockBazaar ID</label>
									<input type="text" class="form-control" id="bbid" name="bbid">
								</div>
								<div class="form-outline mt-3 mb-3">
									<label class="form-label" for="pwd">Password</label>
									<input type="password" class="form-control" id="pwd" name="pswd">
								</div>
								<div class="modal-footer justify-content-center">
									<div class="mt-3">
										<button type="submit" class="btn m-2" style="color: black; border-color: black;"
											value="signin" name="signin">Sign in</button>&nbsp;
										<a class="btn m-2" style="color: black; border-color: black;"
											href="signup.php">Register</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="" style="background-color: black;">

		<div class="hero-full-screen">
			<div class="middle-content-section container-fluid">

				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="mb-3" style="padding-bottom: 30px;">A Free Online Marketplace<br> No Platform Fees<br> No Middlemen</h1>
							<a class="btn btn1 btn-outline-light m-2" href="" role="button" rel="nofollow"
								target="_blank">Get a call</a>
							<a class="btn btn-outline-light btn-lg m-2" href="signup.php" target="_blank"
								role="button">Get Started</a>
						</div>
						<div class="col">
							<img src="img/dmarket.png" class="col-md-6 float-md-end mb-3 ms-md-3"
								alt="..." style="height: 400px; width: 600px;object-fit: cover;">
						</div>
					</div>
				</div>

				<div class="bottom-content-section" data-magellan data-threshold="0">
					<a href="#main-content-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
							viewBox="0 0 24 24">
							<path
								d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z" />
						</svg></a>
				</div>

			</div>

	</section>
	<section class="container-xl" id="about">
		<div class="section-title">
			<h2>About Us</h2>
		</div>
		<div class="row content gx-0">
			<div class="col">
				<p>
					We provide Secured and Reliable Asset Exchange at your ease
				</p>
				<ul style="padding-bottom: 20px;">
					<li><i class="ri-check-double-line"></i> Buy, sell, and rent on the same platform</li>
					<li><i class="ri-check-double-line"></i> Efficient dispute resolution methodologies</li>
					<li><i class="ri-check-double-line"></i> Decentralized asset exchange model</li>
				</ul>
				<div class="btn" style="color: black; border-color: black;">Read More<span
						class="fas fa-arrow-right"></span></div>
			</div>
			<div class="col text-center">
				<img src="img/phone.png" class="col-md-6 float-md-end mb-3 ms-md-3" alt=""
					style="height: 350px; width: min-content;">
			</div>
		</div>
	</section>
	<section id="services" class="services">
		<div class="section-title">
			<h2>A Decentralized Marketplace</h2>
		</div>
		<div class="container" data-aos="fade-up">
			<div class="container d-flex justify-content-center align-items-center">
				<div class="d-lg-flex">
					<div class="card border-0 me-lg-4 mb-lg-0 mb-4">
						<div class="backgroundEffect"></div>
						<div class="pic"> <img class=""
								src="https://images.pexels.com/photos/374016/pexels-photo-374016.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
								alt="">
						</div>
						<div class="content">
							<p class="h-1 mt-4">Secure storage</p>
							<p class="text-muted mt-3">We store the vast majority of the digital assets in secure
								offline storage.</p>
							<div class="d-flex align-items-center justify-content-between mt-3 pb-3">
								<div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
							</div>
						</div>
					</div>
					<div class="card border-0 me-lg-4 mb-lg-0 mb-4">
						<div class="backgroundEffect"></div>
						<div class="pic"> <img class=""
								src="https://images.pexels.com/photos/1560932/pexels-photo-1560932.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
								alt="">
						</div>
						<div class="content">
							<p class="h-1 mt-4">Protected by Insurance</p>
							<p class="text-muted mt-3">We have made crypto trade secured and insured to lesser risk with
								our updated transaction policies. q</p>							
						</div>
					</div>
					<div class="card border-0 mb-lg-0 mb-4">
						<div class="backgroundEffect"></div>
						<div class="pic"> <img class=""
								src="https://images.pexels.com/photos/4491881/pexels-photo-4491881.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
								alt="">
						</div>
						<div class="content">
							<p class="h-1 mt-4">Remote Access Advantage</p>
							<p class="text-muted mt-3">Keep global enitities of your assets safe from malware,
								ransomware, phishing, and other Internet risks - no matter where they work from.</p>
							<div class="d-flex align-items-center justify-content-between mt-3 pb-3">
								<div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End of Cards-->
	<footer id="footer">

		<div class="footer-newsletter">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<h4>Join Our Newsletter</h4>
						<p>Keep Yourself updated with our new stories and upcoming trends</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-top">
			<div class="container">
				<img class="" src="img/bb-logo.png" alt="" style="height: 50px; width: fit-content; " />
				<div class="row">
					<div class="col-lg-3 col-md-6 footer-contact mx-auto">
						<h3
							style="border: 3px solid white; width: fit-content; border-radius: 50px; padding: 0 6px 0 6px;">
							Block Bazaar</h3>
						<p style="padding-top: 20px;">
							XX Street <br>
							Kolkata, WB 7000XX<br>
							India <br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> projectbb@gmail.com<br>
						</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms and Conditions</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Others</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Our Mission</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">FAQs</a></li>
							<li><i class="bx bx-chevron-right"></i> <a data-bs-toggle="modal" href="#queryModal"
									id="query">Send a Query</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Social Media</h4>
						<div class="social-links mt-3">
							<a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
							<a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
							<a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
							<a href="#" class="google-plus"><i class="fa-brands fa-google-plus"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<div class="modal fade align-content-center" id="queryModal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content " style="border-radius: 20px;">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Send a Query</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class="container-fluid">
						</br>
						<div class="container" id="reachUs">
							<div class="form-floating mb-3 mt-3">
								<input type="text" class="form-control" id="fullName" placeholder="Full Name"
									name="fullName" required>
								<label for="fullName">
									<font style="color: red; ">*</font>Full Name
								</label>
							</div>
							<div class="form-floating mb-3 mt-3">
								<input type="text" class="form-control" id="email" placeholder="Email" name="email"
									required>
								<label for="email">
									<font style="color: red; ">*</font>Email
								</label>
							</div>
							<div class="form-floating mt-3 mb-3">
								<textarea name="userMessage" id="userMsg" class="form-control" cols="20" rows="5"
									placeholder="Message"></textarea>
								<label for="userMsg">Message</label>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Footer -->
				<div class="modal-footer justify-content-center">
					<div class="mt-3">
						<button type="reset" class="btn btn-primary me-md-2" style="color: black;"
							value="reset">Reset</button>
						<button type="submit" class="btn btn-danger btn-primary me-md-2" style="color: black;"
							data-bs-dismiss="modal" value="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>