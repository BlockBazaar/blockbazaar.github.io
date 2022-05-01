<?php
$host = "localhost";
$user = "postgres";
$pass = "DeB$14799";
$db = "Blockbazaardb";
$con = pg_connect ("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server")
if ($con) {
	echo "Error : Unable to open database\n";
} else {
	$name = $_POST['Full Name'];
	$mail = $_POST['Email'];
	$con_num = $_POST['Contact Number'];
	$date = $_POST['Date of Birth'];
	$password = $_POST['Password'];
	$address = $_POST['Address'];
	$zipcode = $_POST['Zip Code'];
	$country = $_POST['Country'];
	$state = $_POST['State'];
	$currency = $_POST['Currency'];

	$query = "INSERT INTO UserCredential (Full Name,Email,Contact Number,Date of Birth, Password,Address, Zip Code,Country, State, Currency) VALUES ($name,$mail,$con_num,$date,$password,$address,$zipcode,$country,$state,$currency)";
	$result = pg_query($con, $query);
	header("Location : signup.php");
}
pg_close($con);
?>