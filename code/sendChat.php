<?php
include"../database/connecting_to_DB.php";

session_start();
if(isset($_POST['sendbutton']))   {
 
    $outgoing =  $_SESSION["unique_id"];
  $incoming_id = $_POST['incoming_id'];
 $message = $_POST['message'];


$query_customer = " INSERT INTO message VALUES ('','$incoming_id','$outgoing','$message')";

if ($conn->query($query_customer) === TRUE){

header('Location: ../website/chat.php?message=chat sent Successfully');
}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }

}

?>