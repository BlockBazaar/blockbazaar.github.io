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
<<<<<<< HEAD
         $name = 'alapan';
         $password = 'deb$';
         $query = "INSERT INTO user2(name, password) values ($name,$password)";
=======
         $query = "INSERT INTO user2(name, password) values ('xyz','abc')";
>>>>>>> df9d940b1c05be78f29934b0384f4c78036f2b34
         $retval = mysqli_query( $query, $conn );
         if(! $retval ) {
            die('Could not enter data: ' . mysqli_error());
         }
         echo 'Entered data successfully';
         mysqli_close($conn);
      ?>
   </body>
</html>
