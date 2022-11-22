<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/main.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICES</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <link rel="stylesheet" href="../css/main.css"/>
</head>
<style>
  body {
    background-image: url('https://img.freepik.com/premium-photo/baby-s-breath-flowers-pink-background_82740-98.jpg?w=2000');
  align-content: center;
  }
  .h{
    text-align: center;
    margin: auto;
  width: 50%;
  padding: 10px;
 
  }
  </style>
<body class="me">
    <nav>
    
        <img class="img2" src="https://i.pinimg.com/736x/e9/60/86/e96086161caad546aba41b027daacee4.jpg">		 		 
      <h4 class="title"> Yani and Tin-tin Catering Service</h4> 
        
        <ul>
        
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="design_about.php">ABOUT</a></li> 
          <li><a href="gallery.php">GALLERY</a></li> 
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICE</a> 
            <ul class="dropdown-menu"> 
              <li><a href="booking.php">Booking</a></li> 
              <li><a href="chat.php">Chat</a></li> 
              <li><a href="services.php">Other Services</a></li> 
             </ul> 
             </li> 	
         <li><a href="#">NOTIFICATIONS</a></li>                  		 
         <li class="dropdown"> 
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-align-justify"></i></a> 
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


    <div class="h">
     <h1 class="h">Services</h1>
      </div>
     <div class="row">
        <div class="column">
<div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="https://d12m9erqbesehq.cloudfront.net/wp-content/uploads/sites/2/2018/11/16112551/event-planner.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Event Packages</h1> 
        <a class="button-74" role="button" href="Event_Planning.php">Learn More</a>
        <p></p>
      </div>
    </div>
  </div>
        </div>
        <div class="column">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="../img/cam.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Photography</h1> 
        <a class="button-74" role="button" href="Photography.html">Learn More</a>
        <p></p>
      </div>
    </div>
  </div>
        </div>

  <div class="column">
     <div class="flip-card">
       <div class="flip-card-inner">
         <div class="flip-card-front">
           <img src="../img/food.jpg" alt="Avatar" style="width:300px;height:300px;">
         </div>
         <div class="flip-card-back">
           <h1>Food Menus</h1> 
           <button class="button-74" role="button">Learn More</button>
           <p></p>
         </div>
       </div>
     </div>
  </div>
     <div class="column">
     <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="../img/inv.jpg" alt="Avatar" style="width:300px;height:300px;">
          </div>
          <div class="flip-card-back">
            <h1>Invitations and Giveaways</h1> 
            <a class="button-74" role="button" href="Invitations_and_Giveaways.php">Learn More</a>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    </div>

  
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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