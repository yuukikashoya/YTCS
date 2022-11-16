<?php

include"../database/connecting_to_DB.php";
session_start();
if(isset($_POST['change'])){
	
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$retype = $_POST['retype'];
    $client_id =  $_SESSION["client_id"];
    $hashed_old_password = sha1($old_password);
    $hashed_new_password = sha1($new_password);


     $result = mysqli_query($conn, "SELECT * FROM client WHERE client_id = '$client_id'");
     $row = mysqli_fetch_assoc($result);
     if(mysqli_num_rows($result) > 0){
       if($hashed_old_password == $row['password']){




 if($new_password == $retype){
    



 	$query = "UPDATE client SET password='$hashed_new_password' WHERE client_id='$client_id'";

 	if($conn->query($query) === TRUE){
		
         header('Location: ../website/settings.php?message=editedSuccessfully');
		
 	}else{
		
 		// echo"Error!!!";
 		echo '<script>window.alert("ERROR!")</script>';
 	}
	
 }else{

     echo '<script>window.alert(" both new password and retype password did not match!");history.go(-1);</script>';



 }


 }
 else{
     echo '<script>window.alert("old password did not match!");history.go(-1);</script>';
   
 }

 }
 }
?>
