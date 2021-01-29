<?php

    $host = "localhost";
    $db_name = "solve";
    $username = "root";
    $password = "";
    $conn= mysqli_connect($host,$username,$password,$db_name) or die($conn);
    if($conn){

    }
   else {
    echo "not connected";
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    }
  
  
?>


