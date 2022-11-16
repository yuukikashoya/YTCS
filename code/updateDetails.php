<?php

include"../database/connecting_to_DB.php";
session_start();
if(isset($_POST['update'])){
	

    $client_id =  $_SESSION["client_id"];
    $sql_query = "SELECT * FROM client WHERE client_id='$client_id' ";
    
    $result = $conn -> query($sql_query);
    
    while($row = $result -> fetch_assoc()){
        $client_id = $row['client_id'];
        $old_name = $row['client_name'];
        $old_email = $row['email'];
        $old_contact = $row['contact'];
        $old_address = $row['address'];


    }


	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
    $address = $_POST['address'];
    $client_id =  $_SESSION["client_id"];

if(empty($name)){
	$name =  $old_name;
	
}
if(empty($email)){
	$email =  $old_email;
	
}
if(empty($contact)){
	$contact =  $old_contact;
}
if(empty($address)){
	$address =  $old_address;
	
}

//    $query = "UPDATE client SET
//     client_name = '$name',
//     address = '$address', 
//     contact = '$contact', 
//     email = '$email'
//     where client_id='$client_id";
 


//  if(mysqli_query($conn, $query)){
    
//  	          header('Location: ../website/settings.php?message=editedSuccessfully');
			
//  	  	}else{
			
//  	  		// echo"Error!!!";
// 	  		echo '<script>window.alert("ERROR!")</script>';
// 	  	}


 	$query = "UPDATE client SET  client_name='$name' WHERE client_id='$client_id'";

  	if($conn->query($query) === TRUE){
		
        $query = "UPDATE client SET  email='$email' WHERE client_id='$client_id'";

        if($conn->query($query) === TRUE){
          
            $query = "UPDATE client SET  contact='$contact' WHERE client_id='$client_id'";

            if($conn->query($query) === TRUE){
              
                $query = "UPDATE client SET  address='$address' WHERE client_id='$client_id'";

                if($conn->query($query) === TRUE){
                  
                    header('Location: ../website/settings.php?message=editedSuccessfully');
                  
                }else{
                  
                    // echo"Error!!!";
                    echo '<script>window.alert("ERROR!")</script>';
                }
                
              
            }else{
              
                // echo"Error!!!";
                echo '<script>window.alert("ERROR!")</script>';
            }
            
          
        }else{
          
            // echo"Error!!!";
            echo '<script>window.alert("ERROR!")</script>';
        }
   
  
		
  	}else{
		
  		// echo"Error!!!";
  		echo '<script>window.alert("ERROR!")</script>';
  	}
 


 
 }

 
?>


