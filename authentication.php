<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$dbhost = "remotemysql.com:3306";
$dbuser = "gS467AnmlZ";
$dbpass = "zW5EBWo1Q6";
$db = "gS467AnmlZ";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

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
	session_start();
	header("Location: ./profile.php");
} else {
	echo "<h1> Login failed. Invalid email or password.</h1>";
}
mysqli_close($con);
?>