<?php
require 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<header>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<style>
		.row {
			margin-left: -5px;
			margin-right: -5px;
		}

		.column {
			float: left;
			width: 50%;
			padding: 5px;
		}

		/* Clearfix (clear floats) */

		table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 70%;
			border: 1px solid #ddd;
			margin: 2vh;
		}

		th {
			background-color: orangered;
			color: white;
		}

		th,
		td {
			text-align: left;
			padding: 16px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		@media (max-device-width:420px) {
			table {
				width: 20px;
			}
		}
	</style>
</header>

<body>
	<?php include 'sidenav.php'; ?>
	<section>
		<div class="section-title">
			<h2>Home</h2>
		</div>
	</section>
	<div class="row d-flex justify-content-center align-items-center">
		<table class="" style="width: 70%;">
			<tr>
				<th>Profile Details</th>
				<th align="right"><a class="btn btn-primary me-md-2" style="background-color: rgb(0, 104, 0)" target="_self" href="editProfile.php" role="button">Edit</a></th>
			</tr>
			<tr>
				<td>BlockBazaarID</td>
				<td><?php echo $_SESSION['BlockBazaarID']; ?></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td><?php echo $_SESSION['FullName']; ?></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td><?php echo $_SESSION['ContactNumber']; ?></td>
			</tr>
			<tr>
				<td>Email-id</td>
				<td><?php echo $_SESSION['Email']; ?></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><?php echo $_SESSION['DOB']; ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo $_SESSION['Password']; ?></td>
			</tr>
			<tr>
				<td>Country</td>
				<td><?php echo $_SESSION['Country']; ?></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?php echo $_SESSION['State']; ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $_SESSION['Address']; ?></td>
			</tr>
			<tr>
				<td>ZipCode</td>
				<td><?php echo $_SESSION['ZipCode']; ?></td>
			</tr>
			<tr>
				<td>Wallet Balance</td>
				<td><?php echo $_SESSION['Wallet']; ?></td>
			</tr>
		</table>
	</div>	
	<div class="row d-flex justify-content-center align-items-center">
		<table class="" style="width: 70%;">
			<tr>
				<th colspan="3">Order Details</th>
			</tr>
			<tr>
				<td>Last Order details</td>
				<td>Order No. 62xx1, XXves basic t-shirt <a href="">know more></a></td>
			</tr>
			<tr>
				<td>Total Orders</td>
				<td>6</td>
			</tr>
			<tr>
				<td>TrackingID</td>
				<td>TID123456 <a href="">know more></a></td>
			</tr>
			<tr>
				<td>Help and FAQs</td>
				<td> 24/7 helpline <a href=""> click to reach us </a></td>
			</tr>
		</table>
	</div>
</body>

</html>