<?php
include"../database/connecting_to_DB.php";


if(isset($_POST['submit']))   {
 
 
  $username = $_POST['username'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $birthday = $_POST['birthday'];
 $contact = $_POST['contact'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];
  $status = 'offline';
  $unique_id = rand(time(), 100000000);

if($password == $confirm){
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $hashed_password = sha1($password);
 $sql_query = "SELECT * FROM client WHERE client_username='$username' ";
 $result = $conn -> query($sql_query);
		

 $sql_query3 = "SELECT * FROM admin WHERE admin_username='$username' ";
 $result3 = $conn -> query($sql_query3);
		
 while($row3 = $result3 -> fetch_assoc()){
   $b = $row3['admin_username'];

 }



 while($row = $result -> fetch_assoc()){
   $a = $row['client_username'];

 }
 if($b == $username){
  echo '<script>window.alert("the username is already exist")</script>';
 echo '<script>window.history.go(-1);</script>';
 }else{
 
 
 if($a == $username){
  echo '<script>window.alert("the username is already exist")</script>';
 echo '<script>window.history.go(-1);</script>';
 }else{

$query_customer = " INSERT INTO client VALUES ('','$name','$username','$hashed_password','$address','$contact','$birthday','$email','$status','$unique_id')";

if ($conn->query($query_customer) === TRUE){




header('Location: ../website/login.php?message=Inserterd Successfully');

}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }

}}}
else
echo '<script>window.alert("password dint match")</script>';
echo '<script>window.history.go(-1);</script>';
}
?>