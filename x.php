<?php 
  $dbhost = "remotemysql.com:3306";
  $dbuser = "gS467AnmlZ";
	$dbpass = "zW5EBWo1Q6";
	$db = "gS467AnmlZ";
  mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($db);
  if (isset($_POST['email'])) {
      $mail = $_POST['email'];
      $password = $_POST['pswd'];
      $sql = "select * from usercredentials where Email = '"$mail"' AND Password = '"$password"' limit 1";
      $res = mysql_query($sql);
      if (mysql_num_rows($res) == 1) {
          echo "Login successful";
          exit()
      }
      else {
          echo "Incorrect Credentials";
          exit();
      }
  }
?>