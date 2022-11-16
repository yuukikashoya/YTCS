<?php
include"../database/connecting_to_DB.php";
session_start();
$client_id =$_SESSION["client_id"];
$status = 'offline';

$query = "UPDATE client SET status='$status' WHERE client_id='$client_id'";

if($conn->query($query) === TRUE){
    
header('Location: ../website/booking.php?message=Inserterd Successfully');
    
}else{
    
    // echo"Error!!!";
    echo '<script>window.alert("ERROR!")</script>';
}

unset ($_SESSION["login"]);
unset ($_SESSION["name"]);
unset ($_SESSION["client_id"]);
unset ($_SESSION["email"]);
unset ($_SESSION["username"]); 
unset ( $_SESSION["unique_id"]);
header('Location: ../website/index.php?message=Inserterd Successfully');
?>