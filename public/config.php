<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost:3307","root","","cuhubuserdata");
    // Check connection


    if (mysqli_connect_errno()){
        echo "no";
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>