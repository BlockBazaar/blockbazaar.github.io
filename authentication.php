<?php
require 'conn.php';

session_start();
$email = $_POST['email'];
$password = $_POST['pswd'];

//to prevent from mysqli injection  
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM usercredentials WHERE Email = '$email' AND Password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count > 0) {
	$_SESSION['Email']=$fetch['Email'];
	header("Location: ./profile.php");
} else {
	echo "<h1> Login failed. Invalid email or password.</h1>";
}
mysqli_close($con);
