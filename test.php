<html>
    <body>
        Hello World
</body>
</html>
<?php
$servername = "remotemysql.com:3306"
$username = "gS467AnmIZ";
$password = "mXgN6pphV7";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>