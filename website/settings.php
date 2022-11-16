<!DOCTYPE html>
<?php
include"../code/status.php";

?>

<html>
    <head>
  <meta charset="utf-8">
  <title>Settings</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- <meta http-equiv="refresh" content="5"> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>





<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/chat.css">
    </head>
   
    <body style="background-color: #f3d8c4 ;">
    <nav>
        <img class="img2" src="Add a subheading.png">		 		 
      <h4 class="title"> YTCS</h4>
      
        
        <ul>
        
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="design_about.php">ABOUT</a></li> 
          <li><a href="#">GALLERY</a></li> 
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICE<span class="caret"></span><i class="fas fa-bell"></i></a> 
             <ul class="dropdown-menu"> 
              <li><a href="booking.php">Booking</a></li> 
              <li><a href="chat.php">Chat</a></li> 
              <li><a href="services.html">Other Services</a></li> 
             </ul> 
             </li> 	
         <li><a href="#">NOTIFICATIONS</a></li>                  		 
         <li class="dropdown"> 
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span><i class="fas fa-align-justify"></i></a> 
             <ul class="dropdown-menu">  
            
              <?php

if(!isset($_SESSION['login'])){ //if login in session is not set
 
  echo '<li><a href="login.php">Login <br> sign up</a></li> ';
}
else{
  echo '  <li><a href="settings.php">Settings</a></li>  ';
  echo '  <li><a href="../code/logout.php">Logout</a></li> ';
}

              ?>
    
             </ul> 
         </li>
       </ul>
     </nav>

<div class="container">
     <div  id="add" class="jumbotron jumbotron-fluid bg">
  




	 <?php
		$client_id =  $_SESSION["client_id"];
		$sql_query = "SELECT * FROM client WHERE client_id='$client_id' ";
		
		$result = $conn -> query($sql_query);
		
		while($row = $result -> fetch_assoc()){
			$client_id = $row['client_id'];
	?>

  
	


             
<div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="account-settings">
					<div class="user-profile">
					<hr class="pog">
						<h4 class="user-name"><?php echo $row['client_name'];?></h4>
						<hr class="name">
			<h4 class="user-name"><?php echo $row['email'];?></h4>
					
						<hr class="email">
            <h4 class="user-name"><?php echo $row['address'];?></h4>
						
						<hr class="address">
            <h4 class="user-name"><?php echo $row['contact'];?></h4>
					
						<hr class="contact">
            <h4 class="user-name"><?php echo $row['status'];?></h4>
						
						<hr class="status">
 
					</div>
					<?php
		}
		
		$conn->close();
	?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<form  method="POST"  action="../code/updateDetails.php" class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Personal Details</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName"class="label">Full Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="eMail"class="label">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="phone"class="label">Phone</label>
							<input type="number" class="form-control" id="contact" name="contact" placeholder="Enter phone number">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="website"class="label">Address</label>
							<input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
							
						<input type="submit" class="btn btn-primary" name="update">
						</div>
					</div>
				</form>
				<form  method="POST"  action="../code/changePassword.php" class="row gutters">
					
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Password</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Street" class="label">Old Password</label>
							<input type="password" class="form-control" id="Street" name="old_password"require placeholder="Enter Old Password">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="sTate"class="label">New Password</label>
							<input type="password" class="form-control" id="sTate" name="new_password"require placeholder="Enter New Password">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="zIp"class="label">Retype New Password</label>
							<input type="password" class="form-control" id="zIp" name="retype"require placeholder="Retype New Password">
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
							
						<input type="submit" class="btn btn-primary" name="change">
						</div>
					</div>
				</form>
			
			</div>
		</div>
	</div>
</div>
</div>














</div>

  
    </body>
</html>