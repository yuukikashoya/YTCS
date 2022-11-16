<?php

$server = "localhost:3307";
$username = "root";
$password = "";
$dbname = "catering_booking_system";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn -> connect_error){
        die ("connection Problem detected!!".$conn -> connect_error );
}
else {
     //   echo "connected successfully"  ; 
  
}

         ?>