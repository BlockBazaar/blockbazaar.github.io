<?php
    require 'conn.php';
    $query = "SELECT * FROM usercredentials WHERE user_id='$_SESSION[user_id]'";
    $res = mysqli_query($con, $query) or die(mysqli_error());
    $fetch = mysqli_fetch_array($res);

    echo "<h2 class='text-success'> " . $fetch['username'] . "</h2>";
    ?>