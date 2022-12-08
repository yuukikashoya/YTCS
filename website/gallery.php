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
   <style>
    .ourgallery{
  background: url('https://img.freepik.com/premium-photo/healthy-food-background-concept-healthy-food-fresh-vegetables-nuts-fruits-stone-background-top-view-copy-space_187166-21326.jpg?w=2000');
  background-size: 100% 100%;
  background-repeat: no-repeat;
}
   </style>
    <body class="ourgallery">
     <center> <nav>
 		 

      
        
        <ul>
        
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="design_about.php">ABOUT</a></li> 
          <li><a href="gallery.php">GALLERY</a></li> 
        <img class="img2" src="Add a subheading.png">		          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"style="color: white;">SERVICE<span class="caret"></span></a> 
             <ul class="dropdown-menu"> 
              <li><a href="booking.php">Booking</a></li> 
              <li><a href="chat.php">Chat</a></li> 

              <li><a href="services.php">Other Services</a></li> 

             </ul> 
             </li> 	
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color: white;">NOTIFICATIONS<span class="caret"></span><i class="fas fa-bell"></i></a> 
             <ul class="dropdown-menu" > 
<?php
$query =" SELECT * FROM announcement ORDER BY an_id DESC LIMIT 5";

if ($result = $conn->query($query)) {


    while ($row = $result->fetch_assoc()) {


?>
<hr style="  border-top: 2px solid white;">
<h4 style="color: white;text-align:center;display:block;"><?php echo $row["an"];?></h4>

<?php

}

$result->free();
}

       ?>       
             </ul> 
             </li>                  		 
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
       <style>
.zoom {
  padding: 1em;

  transition: transform .2s; /* Animation */

  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.7); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */

}

</style>
     </nav></center>    <br><br><br><br><br>       <div class="container kek center papata">
             <!-- Slideshow container -->


             <?php
				$sql_query1 = "SELECT * FROM img";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$img_id  = $row1['img_id'];
			?>
 



                <div class="container lan">
                  <div  >

                <img class="len zoom notDIV" src="../adminSection/images/<?php echo $row1['file'];?>">
           
               </div>
               
          
             </div>
        
            
                <?php		
				}
			?>     
          </div>
  
    </body>
    <footer>
  <div class="pap">	 
  <h1 class="hi"> <img class="img2" src="Add a subheading.png">	Yani and Tin-tin Catering Service</h1><h3>A taste you'll remember.</h3><br>
     </div>
  <p><button class="butt" type="button"><img class="img2" src="https://www.freepnglogos.com/uploads/black-email-logo-png-0.png"><br></button>
  <br><a href="gallery.php">Gallery</a><br><a href="design_about.php">About</a><br></p><br>
  <h3 class="small">You may also Contact Us</h3>
  <p><i class="fa fa-phone" style="font-size:25px"></i>Mobile: 09663955462<br> 09319919517<br>
  </p>

</footer>
</html>