<?php
include"../database/connecting_to_DB.php";
session_start();

if(isset($_POST['submit']))   {
 
 
  $username = $_SESSION["username"];
 $name =  $_SESSION["name"];
 $email =  $_SESSION["email"];
 $contact = $_POST['contact'];
 $pax = $_POST['pax'];
 $time_start = $_POST['time_start'];
 $time_ends = $_POST['time_ends'];
 $date = $_POST['date'];
 $street = $_POST['street'];
 $city = $_POST['city'];
 $zip = $_POST['zip'];
 $bundle = $_POST['Event'];
 $Photography = $_POST['Photography'];
 $invitation = $_POST['invitation'];
 $set = $_POST['b'];


$query_customer = " INSERT INTO service VALUES ('','$username','$name','$email','$contact','$bundle','$pax','$time_start','$time_ends','$date','$street','$city','$zip','$Photography','$invitation','$set')";

if ($conn->query($query_customer) === TRUE){




header('Location: ../website/index.php?message=Inserterd Successfully');

}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }

}


?>

