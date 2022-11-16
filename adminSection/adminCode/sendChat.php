<?php
include"../../database/connecting_to_DB.php";

session_start();
if(isset($_POST['sendbutton']))   {
 
    $outgoing =  '212121';
  $incoming_id = $_POST['incoming_id'];
 $message = $_POST['message'];
 $client_id = $_POST['ss'];


$query_customer = " INSERT INTO message VALUES ('','$incoming_id','$outgoing','$message')";

if ($conn->query($query_customer) === TRUE){

    header('Location: ' . $_SERVER['HTTP_REFERER']);


}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }

}

?>