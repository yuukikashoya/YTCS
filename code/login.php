<?php
include"../database/connecting_to_DB.php";
session_start();
if(isset($_POST["submit1"])){
   
    $username = $_POST["username"];

    $password = $_POST["password"];
    $status = 'online';
    $hashed_password = sha1($password);
    $result = mysqli_query($conn, "SELECT * FROM client WHERE client_username = '$username'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
       $check = $row['password'];
      if($hashed_password == $check){
       
       
        $_SESSION["login"] = true;
        $_SESSION["name"] = $row["client_name"];
        $_SESSION["client_id"] = $row["client_id"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["username"] = $row["client_username"];
        $_SESSION["unique_id"] = $row["unique_id"];
        
    
	$query = "UPDATE client SET status='$status' WHERE client_username='$username'";

	if($conn->query($query) === TRUE){
		
    header('Location: ../website/index.php?message=Inserterd Successfully');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}



    
  
      }
      else{
   
        echo  "<script> alert('Wrong Password');history.go(-1); </script>";
      }
    }
    else{
      //  echo "<script> alert('Wrong username');history.go(-1); </script>";



      $result1 = mysqli_query($conn, "SELECT * FROM admin WHERE admin_username = '$username'");
    $row1 = mysqli_fetch_assoc($result1);
    if(mysqli_num_rows($result1) > 0){
       $check = $row1['password'];
      if($hashed_password == $check){
       
       
        $_SESSION["adminLogin"] = true;
        $_SESSION["adminName"] = $row1["admin_name"];
        $_SESSION["admin_id"] = $row1["admin_id"];
        $_SESSION["admin_unique_id"] = $row1["unique_id"];
        $_SESSION["rank"] = $row1["admin_rank"];
        $_SESSION["adminUsername"] = $row1["admin_username"];
        
    
	$query = "UPDATE admin SET status='$status' WHERE admin_username='$username'";

	if($conn->query($query) === TRUE){
		
    header('Location: ../adminSection/adminWebsite/display.php?message=Inserterd Successfully');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}



    
  
      }
      else{
   
        echo  "<script> alert('Wrong Password admin');history.go(-1); </script>";
      }
    }
    else{
       echo "<script> alert('Wrong username');history.go(-1); </script>";
    }
    }
  }

?>