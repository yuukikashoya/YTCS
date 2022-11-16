<?php
include"../../database/connecting_to_DB.php";
session_start();
$admin_id =$_SESSION["admin_id"];
$status = 'offline';

$query = "UPDATE admin SET status='$status' WHERE admin_id='$admin_id'";

if($conn->query($query) === TRUE){
    
header('Location: ../website/booking.php?message=Inserterd Successfully');
    
}else{
    
    // echo"Error!!!";
    echo '<script>window.alert("ERROR!")</script>';
}

unset ($_SESSION["adminLogin"]);
unset ($_SESSION["adminName"]);
unset ($_SESSION["admin_id"]);
unset ($_SESSION["adminUsername"]);
unset ( $_SESSION["admin_unique_id"]);

header('Location: ../../website/index.php?message=Inserterd Successfully');
?>  