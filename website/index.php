<?php
session_start();
include"../database/connecting_to_DB.php";
?>
<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <title>Homepage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    </head>
   
    <body>
      <center>
      <nav>     
        <ul>
        
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="design_about.php">ABOUT</a></li> 
          <li><a href="gallery.php">GALLERY</a></li>
          <img class="img2" src="Add a subheading.png">	
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICE<span class="caret"></span></a> 
             <ul class="dropdown-menu"> 
              <li><a href="booking.php">Booking</a></li> 
              <li><a href="chat.php">Chat</a></li> 

              <li><a href="services.php">Other Services</a></li> 

             </ul> 
             </li> 	
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">NOTIFICATIONS<span class="caret"></span><i class="fas fa-bell"></i></a> 
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
     </nav>
            </center>
             <!-- Slideshow container -->
  
  <!-- The dots/circles -->
  <div class="wala" >
        <br><br><br>

        <h1 class="lol">Yani and Tin-tin Catering Service</h1><h3 style=" font-size: 48px; color: white; font-weight: bold; -webkit-text-stroke: 0.2vw rgb(160, 93, 26);">A taste you'll remember.</h3>  
  </div>
  <div class="basic">
  <div class="nah">
        <span class="forda">
        <br><br<br><br><br><br><br>
        <h2>“One of the very nicest things about life<br> is the way we must regularly stop <br>whatever it is we are doing and devote our <br>attention to eating.”<br>
–       Luciano Pavarotti </h2> <br><br><br>
        </span>
        <span class=" us">
        <a href="booking.php"><button class="button-81 " role="button">Book  Now</button></a></span><br><br>

</div>
</div>
        <br><br><br><br><br><br><br><br><br><br><br>
<div class="container0"><br><br>
        <center><h1 style="font-family: fantasy; -webkit-text-stroke: 0.1vw rgb(255, 255, 255); font-size: 4em;">Services Offers</h1></center>
<div class="container3">
	      <img src="https://d12m9erqbesehq.cloudfront.net/wp-content/uploads/sites/2/2018/11/16112551/event-planner.jpg">
        <a href="#" class="at">Event Packages</a><br><br>
</div>
<div class="container1">
	<img src="../img/cam.jpg">
  <a href="#" class="at">Photography</a><br><br>
</div>
<div class="container2">
	      <img src="../img/inv.jpg">
        <a href="#" class="at">Invitations and<br> Giveaways</a><br><br><br><br>
</div><br><br><br><br>
</div>
<br><br><br>

</body>
<footer>
<div class="pap">	 
        <h1 class="hi"> <img class="img2" src="Add a subheading.png">	Yani and Tin-tin Catering Service</h1><h3>A taste you'll remember.</h3><br><br>
</div>
        <p><a class="butt" type="button" href="chat.php"><img class="img2" src="https://www.freepnglogos.com/uploads/black-email-logo-png-0.png"><br></a>
        <br><a href="gallery.php">Gallery</a><br><a href="design_about.php">About</a><br></p><br>
        <h3 class="small">You may also Contact Us</h3>
        <p><i class="fa fa-phone" style="font-size:25px"></i>Mobile: 09663955462<br> 09319919517<br>
        </p>
</footer>
</html>