<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = "remotemysql.com:3306";
         $dbuser = "root";
         $dbpass = "" ;
         $db = "gS467AnmIZ";
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         $name = 'adam';
         $password = 'adam123';
         $query = "INSERT INTO user2(name, password) values ('$name','$password')";
		 mysqli_select_db('gS467AnmIZ');
         $retval = mysqli_query($conn, $query);
         if(! $retval ) {
            die('Could not enter data: ' . mysqli_error());
         }
         echo 'Entered data successfully';
         mysqli_close($conn);
      ?>
   </body>
</html>
