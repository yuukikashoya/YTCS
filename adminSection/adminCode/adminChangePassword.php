<?php

include"../../database/connecting_to_DB.php";
session_start();
if(isset($_POST['change'])){
	
	$old_password = $_POST['old_password'];
	$New_password = $_POST['new_password'];
	$retype = $_POST['retype'];
    $admin_id = $_SESSION["admin_id"];
    $hashed_old_password = sha1($old_password);
    $hashed_new_password = sha1($New_password);



    $result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$admin_id'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($hashed_old_password == $row['password']){




if($New_password == $retype){
    




	$query = "UPDATE admin SET password='$hashed_new_password' WHERE admin_id='$admin_id'";

	if($conn->query($query) === TRUE){
		
        header('Location: ../adminWebsite/adminList.php?message=editedSuccessfully');
		
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
