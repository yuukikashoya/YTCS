<?php
session_start();
include"../database/connecting_to_DB.php";
?>
<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<title>Photography Service</title>
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
<style>
 
  } */
</style>
<body class="me">
<center><nav>
    
		 		 

        
        <ul>
        
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="design_about.php">ABOUT</a></li> 
          <li><a href="gallery.php">GALLERY</a></li> 
        <img class="img2" src="https://i.pinimg.com/736x/e9/60/86/e96086161caad546aba41b027daacee4.jpg">          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES<span></span></a> 
            <ul class="dropdown-menu"> 
             <li><a href="booking.php">Booking</a></li> 
             <li><a href="chat.php">Chat</a></li> 

             <li><a href="services.php">Other Services</a></li> 

            </ul> 
            </li> 	
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color: white;">NOTIFICATIONS<span></span><i class="fas fa-bell"></i></a> 
            <ul class="dropdown-menu" > 
<?php
include"../database/connecting_to_DB.php";
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
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-align-justify"></i></a> 
             <ul class="dropdown-menu">           
                 <li><a href="#">Settings</a></li>  
                 <li><a href="../code/logout.php">Logout</a></li> 
             </ul> 
         </li>
       </ul>      
    </nav></center>
    <div class="nemo">
    <p class="title1">PHOTOGRAPHY</p>
    
    <div class="photo">
    <p class="photo1">Photography is more than just a skill or talent; it's a passion that needs constant fulfillment. <br>Whether you are an amateur or a professional photographer, these inspirational photography quotes for <br>photographers would motivate you to find your passion and love for photography.<br>
        All photographs are memento mori. To take a photograph is to participate in another person???s (or <br> thing???s) mortality, vulnerability, mutability. Precisely by slicing out this moment and freezing it, all <br>photographs testify to time???s relentless melt.
    <br>
    <a href="booking.php"> <button class="button-81" role="button">Grab Service</button></a>
   </p>
    </div>
    </div>
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