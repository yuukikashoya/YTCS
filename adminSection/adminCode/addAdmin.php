<?php
include"../../database/connecting_to_DB.php";

if(isset($_POST['submit']))   {
 
 
  $username = $_POST['username'];
 $name = $_POST['name'];
 $unique_id = '212121';
$password = $_POST['password'];
$hashed_password = sha1($password);
$status = 'offline';

 $sql_query = "SELECT * FROM admin WHERE admin_username='$username' ";
 $result = $conn -> query($sql_query);
		
 while($row = $result -> fetch_assoc()){
   $a = $row['admin_username'];

 }
 $sql_query1 = "SELECT * FROM client WHERE client_username='$username' ";
 $result1 = $conn -> query($sql_query1);
		
 while($row1 = $result1 -> fetch_assoc()){
   $b = $row1['client_username'];

 }
 if($b == $username){
  echo '<script>window.alert("the username is already exist")</script>';
 echo '<script>window.history.go(-1);</script>';
 }else{



  if($a == $username){
   echo '<script>window.alert("the username is already exist")</script>';
  echo '<script>window.history.go(-1);</script>';
  }else{

 $query_customer = " INSERT INTO admin VALUES ('','$name','$username','$hashed_password','$status','$unique_id','0')";

 if ($conn->query($query_customer) === TRUE){




 header('Location: ../adminWebsite/adminList.php?message=Inserterd Successfully');

 }   else{
 echo '<script>window.alert("error 01")</script>';
 echo '<script>window.history.go(-1);</script>';


     }

 }
}

}
?>