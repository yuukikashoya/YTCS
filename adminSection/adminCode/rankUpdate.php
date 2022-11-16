<?php

include"../../database/connecting_to_DB.php";
session_start();
if(isset($_POST['update'])){

 
	$admin_id = $_POST['admin_id'];
	$rank = $_POST['rank'];
    $user = '2';


    $sql_query = "SELECT * FROM admin WHERE admin_id='$admin_id' ";
		
    $result1 = $conn -> query($sql_query);
    
    while($row = $result1 -> fetch_assoc()){
      
 
        $current_rank =$row['admin_rank'];

    }







if($current_rank == $user){
    $message = 'you cant edit a root admin.';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('../adminWebsite/adminList.php');
    </SCRIPT>";
}
else {

echo $rank;
     $result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$admin_id'");
     $row = mysqli_fetch_assoc($result);
     if(mysqli_num_rows($result) > 0){




 	$query = "UPDATE admin SET admin_rank='$rank' WHERE admin_id='$admin_id'";

 	if($conn->query($query) === TRUE){
		
         header('Location: ../adminWebsite/adminList.php?message=editedSuccessfully');
		
 	}else{
		
 		// echo"Error!!!";
 		echo '<script>window.alert("ERROR!")</script>';
 	}
	}






 }
}
?>
