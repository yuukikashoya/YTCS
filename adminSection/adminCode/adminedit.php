<?php
include"../../database/connecting_to_DB.php";
session_start();
if(isset($_POST['submit'])){

	$img_id = $_POST['img_id'];
	$img_name = $_POST['img_name'];



$query = "UPDATE img SET img_name='$img_name' WHERE img_id='$img_id'";

if($conn->query($query) === TRUE){
   
    header('Location:  ../adminWebsite/adminGallery.php?message=editedSuccessfully');
   
}else{
   
    // echo"Error!!!";
    echo '<script>window.alert("ERROR!")</script>';
}
}
?>