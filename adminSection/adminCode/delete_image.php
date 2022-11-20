<?php

include"../../database/connecting_to_DB.php";
if(isset($_GET['img_id'])){
	
	$img_id = $_GET['img_id'];

	$query = "DELETE FROM img WHERE img_id = '$img_id' ";

	if($conn->query($query) === TRUE){

        header('Location: ../adminWebsite/adminGallery.php?message=delete Successfully');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}
?>