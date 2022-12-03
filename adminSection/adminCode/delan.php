<?php

include"../../database/connecting_to_DB.php";
if(isset($_GET['an_id'])){
	
	$an_id = $_GET['an_id'];

	$query = "DELETE FROM announcement WHERE an_id = '$an_id' ";

	if($conn->query($query) === TRUE){
		



        header('Location: ../adminWebsite/an.php?message=delete Successfully');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}
?>