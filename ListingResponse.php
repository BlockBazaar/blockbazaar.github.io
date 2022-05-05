<?php
require 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<header>
	<title>Listing</title>
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
</header>

<body>
	<span id="particles-js">
	</span>
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	<div class="align-content-center justify-content-center rounded-3 mainDiv" id="listProduct">
		<div class="justify-content-center text-light" style="padding: 20px; background-color: rgb(54, 54, 54);">
			<h2 class="d-flex align-items-center justify-content-center">Product Listing</h2>
			<div class="body">
			<?php
				require 'conn.php';

				if (!$con) {
					die('Could not connect: ' . mysqli_error());
				}
				$pdtID = $_REQUEST["pdtID"];
				$query1 = "SELECT * from Products WHERE ProductID='$pdtID'";

				$retval1 = mysqli_query($con, $query1);
				if (mysqli_num_rows($retval1) > 0) {
					echo "Product Already Exists";
					echo "<h6 class='d-flex justify-content-center align-items-center' style='padding: 10vh 0 3vh 0;'><a class='btn' style='color:rgb(179, 179, 179); background-color: rgba(0, 0, 0, 0.377)' href='catalogue.php'> View Catalogue</a></h6>";
				} else {
					$pdtname = $_REQUEST["pdtName"];
					$pimg = $_FILES["pimg"]["name"];
					$brand = $_REQUEST["brand"];
					$colr = $_REQUEST["colr"];
					$description = $_REQUEST["description"];
					$price = $_REQUEST["price"];

					$query2 = "INSERT INTO Products(ProductID, Name, Image, Brand, Colour, Price, Description, Owner, ListedForSale) VALUES ('$pdtID','$pdtname', '$pimg', '$brand', '$colr', '$price', '$description', '$_SESSION[BlockBazaarID]', 1 )";

					$retval2 = mysqli_query($con, $query2);
					if (!$retval2) {
						die('Could not enter data: ' . mysqli_error());
					}
					echo "<h4 style=''padding: 12vh 0 0 0;'>Your Product has been succesfully Listed.</h4>";
					echo "<h6 class='d-flex justify-content-center align-items-center' style='padding: 10vh 0 3vh 0;'><a class='btn' style='color:rgb(179, 179, 179); background-color: rgba(0, 0, 0, 0.377)' href='catalogue.php'> View Catalogue</a></h6>";
					echo "<h6 class='d-flex justify-content-center align-items-center' style='padding: 10vh 0 3vh 0; font-size: smaller'>Best Wishes from BlockBazaar</h6>";
				}
				mysqli_close($con);
				?>				
			</div>
		</div>
	</div>
</body>

</html>
