<?php
require 'conn.php';

session_start();
$bbid = $_POST['bbid'];
$password = $_POST['pswd'];

//to prevent from mysqli injection  
$bbid = stripcslashes($bbid);
$password = stripcslashes($password);
$bbid = mysqli_real_escape_string($con, $bbid);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM usercredentials WHERE BlockBazaarID = '$bbid' AND Password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count > 0) {
	$_SESSION['BlockBazaarID'] = $row['BlockBazaarID'];
	$_SESSION['FullName'] = $row['FullName'];
	$_SESSION['Email'] = $row['Email'];
	$_SESSION['ContactNumber'] = $row['ContactNumber'];
	$_SESSION['DOB'] = $row['DOB'];
	$_SESSION['Password'] = $row['Password'];
	$_SESSION['Country'] = $row['Country'];
	$_SESSION['State'] = $row['State'];
	$_SESSION['Address'] = $row['Address'];
	$_SESSION['ZipCode'] = $row['ZipCode'];
	$_SESSION['Wallet'] = $row['Wallet'];

	header("Location: ./profile.php");
} else {
	echo "<h1> Login failed. Invalid email or password.</h1>";
}
mysqli_close($con);
