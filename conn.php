<?php
$dbhost = "remotemysql.com:3306";
$dbuser = "gS467AnmlZ";
$dbpass = "zW5EBWo1Q6";
$db = "gS467AnmlZ";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if(!$con) 
{ 
die("Connection failed: " . mysqli_connect_error()); 
} 
?>