<html>
    <body>
        Hello World
</body>
</html>
<?php
$host = "ec2-52-201-124-168.compute-1.amazonaws.com";
$user = "pcfuiaofaalxez";
$pass = "8cf9be157e275bd1ac5c0e41155c79a2ca501f30a9345bdf35cc1a79709a83bb";
$db = "d30urd6dg1iirk";
$con = pg_connect ("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server")
if ($con) {
	echo "Error : Unable to open database\n";
} else {
    $name = 'avishikta';
    $password = 'avka'
	$query = "INSERT INTO user2(name,password) VALUES ($name,$password)";
	$result = pg_query($con, $query);
}
pg_close($con);
?>