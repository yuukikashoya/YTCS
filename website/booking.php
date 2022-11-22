<?php
include"../code/status.php";

?>
<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <title>Booking</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



<link rel="stylesheet" href="../css/main.css">
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
    
    <div class="center">
    <div class="testbox center">
        <form class="aform" method="POST" action="../code/service.php">
          <div class="banner">
            <img class="wallpaper" src="https://img.buzzfeed.com/buzzfeed-static/static/2020-09/23/19/enhanced/19b0de03aa06/enhanced-22720-1600888307-24.jpg?crop=492:351;0,0&output-format=jpg&output-quality=auto">
          </div>
          <h2>Booking Form</h2>
          <div class="item " >
            <p>Event Pakage</p>
          
            <input type="radio" name="Event" id="Birthday" value="Birthday"/>
             <label for="Birthday">Birthday</label>
            <input type="radio" name="contact"  id="Weddings" value="Weddings"/>
             <label for="Weddings">Weddings</label>
            <input type="radio" name="Event"   id="Organizzational" value="Organizzational Event"/>
           <label for="Organizzational">Organizzational Event</label>
        
        
          </div>
          <div class="item " >
            <p>Photography Pakage</p>
          
            <input type="radio" name="Photography" id="x" value="yes"/>
             <label for="x ">yes</label>
            <input type="radio" name="Photography"  id="z" value="no"/>
             <label for="z">no</label>

        
        
          </div>
          <div class="item">
            <p>Phone</p>
            <input type="number" name="contact"/>
          </div>
          <div class="item">
            <p>Pax</p>
            <input type="number" name="pax"/>
          </div>

          <div class="item">
            <p>Date</p>
            <input type="date" name="date"/>

          </div>
          <div class="item">
            <p>Time</p>
            <input type="time" name="time_start"/>
            <input type="time" name="time_ends"/>
          </div>
          <div class="item">
            <p>Location</p>
            <input type="text" name="street" placeholder="Street address" />
            <div class="city-item">
              <input type="text" name="city" placeholder="City" />
              <input type="text" name="zip" placeholder="Postal / Zip code" />
            </div>
          </div>
          <div class="btn-block">
            <button type="submit" class="submit" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
</body>
</html>