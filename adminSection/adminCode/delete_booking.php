<?php

include"../../database/connecting_to_DB.php";
if(isset($_GET['service_id'])){
	
	$service_id = $_GET['service_id'];

	$query = "DELETE FROM service WHERE service_id = '$service_id' ";

	if($conn->query($query) === TRUE){
		



        header('Location: ../adminWebsite/display.php?message=delete Successfully');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}
?>