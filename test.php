<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "";
         $db = "gS467AnmlZ";
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         $name = 'adam';
         $password = 'adam123';
         $query = "INSERT INTO user2(name, password) values ('$name','$password')";
         $retval = mysqli_query($conn, $query);
         if(! $retval ) {
            die('Could not enter data: ' . mysqli_error());
         }
         echo 'Entered data successfully';
         mysqli_close($conn);
      ?>
   </body>
</html>
