<?php
include"../database/connecting_to_DB.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <title>Gallery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/chat.css">
    </head>
   
    <body>
      <nav>
        <img class="img2" src="Add a subheading.png">		 		 
      <h4 class="title"> YTCS</h4>
      
        
        <ul>
        
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="design_about.php">ABOUT</a></li> 
          <li><a href="gallery.php">GALLERY</a></li> 
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICE<span class="caret"></span><i class="fas fa-bell"></i></a> 
             <ul class="dropdown-menu"> 
              <li><a href="booking.php">Booking</a></li> 
              <li><a href="chat.php">Chat</a></li> 

              <li><a href="services.php">Other Services</a></li> 

             </ul> 
             </li> 	
         <li><a href="#">NOTIFICATIONS</a></li>                  		 
         <li class="dropdown"> 
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret">
    <?php 
// if(isset($_SESSION['login'])){ //if login in session is not set
               
//   echo $_SESSION['name'],' ';
// }


?>
         </span><i class="fas fa-align-justify"></i></a> 
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
             <!-- Slideshow container -->


             <?php
				$sql_query1 = "SELECT * FROM img";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$img_id  = $row1['img_id'];
			?>
 
           <div class="container kek center">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
             <h2>  
                <span class="label label-default">  <?php echo $row1['img_name'];?></span> 
             </h2>
                <br/> 
                <img class="len" src="../adminSection/images/<?php echo $row1['file'];?>">
            </details> 
            </div>
             </div>
                </div>
            
                <?php		
				}
			?>     
  
  
    </body>
    <footer>
  <div class="pap">	 
  <h1 class="hi"> <img class="img2" src="https://i.pinimg.com/736x/e9/60/86/e96086161caad546aba41b027daacee4.jpg">	Yani and Tin-tin Catering Service</h1><h3>A taste you'll remember.</h3>
     </div>
  <p><img class="img2" src="https://cdn-icons-png.flaticon.com/512/49/49354.png"><img class="img2" src="https://www.freepnglogos.com/uploads/black-email-logo-png-0.png"><br>
    <a href="">Menu<br></a><a href="">Gallery</a><br><a href="">About</a><br><a href="">FAQs</a></p><br>
  <h3>Contact Us</h3>
  <p><i class="fa fa-phone"></i>Mobile: 09663955462<br> 09319919517<br>
  <i class="material-icons">&#xe0be;</i>Email: <a href="">myadmin.123@gmail.com</a>
  </p>

</footer>
</html>