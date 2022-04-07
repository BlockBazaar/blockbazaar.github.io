<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = 'remotemysql.com:3306';
         $dbuser = 'gS467AnmIZ';
         $dbpass = 'mXgN6pphV7';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         $name = 'alapan';
         $password = 'deb$';
         $query = "INSERT INTO user2(name, password) values ($name,$password)";
         $retval = mysqli_query( $query, $conn );
         if(! $retval ) {
            die('Could not enter data: ' . mysqli_error());
         }
         echo "Entered data successfully\n";
         mysqli_close($conn);
      ?>
   </body>
</html>
