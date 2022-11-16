<?php

include"../../database/connecting_to_DB.php";

if(isset($_GET['admin_id'])){
    session_start();
    $root = '2';

    $admin_id = $_GET['admin_id'];
    $sql_query = "SELECT * FROM admin WHERE admin_id='$admin_id' ";
		
    $result1 = $conn -> query($sql_query);
    
    while($row = $result1 -> fetch_assoc()){
      
 
        $current_rank =$row['admin_rank'];

    }
    if($current_rank == $root){
        $message = 'you cant delete a root admin.';
    
        echo "<SCRIPT> //not showing me this
            alert('$message')
            window.location.replace('../adminWebsite/adminList.php');
        </SCRIPT>";
    }
else{



$userRank = $_SESSION["rank"];
if($userRank >= 1){


    $user =   $_SESSION["admin_id"];
   
    if($user == $admin_id){
        // header('Location: ../adminWebsite/adminList.php?msg=<script>window.alert("ERROR!")</script>');
        $message = 'you cant delete you own account.';

        echo "<SCRIPT> //not showing me this
            alert('$message')
            window.location.replace('../adminWebsite/adminList.php');
        </SCRIPT>";
    }
    else{
	


	$query = "DELETE FROM admin WHERE admin_id = '$admin_id' ";

	if($conn->query($query) === TRUE){

		header('Location: ../adminWebsite/adminList.php?msg=Successfully Deleted!');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}
	
}
}
else{
    $message1 = 'You are not a super admin to delete a user.';

    echo "<SCRIPT> //not showing me this
        alert('$message1')
        window.location.replace('../adminWebsite/adminList.php');
    </SCRIPT>";
}
}}

?>