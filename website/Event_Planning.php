<?php 
session_start();
include"../database/connecting_to_DB.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/main.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event Packages</title>

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:700&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="../css/event.css"/>
</head>
<style>
  body {
    background-image: url('https://img.freepik.com/premium-photo/baby-s-breath-flowers-pink-background_82740-98.jpg?w=2000');
  align-content: center;
  background-repeat: no-repeat;
  background-size: 100% 100%;
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

  
  </nav>
<center>
<div class="p1">
    <h1>Package Deals</h1>
    <div class="quotes">
      <a class="card" href="#weddings">
        <div class="box box1">
          <img class="event img123" src="https://www.beaches.com/blog/content/images/2019/11/Beach-Wedding-Detail-Aisle-Flowers-1.jpg" style="width: 300px; height: 300px;">
          <h2>Weddings</h2>
        </div>
        <div class="bg"></div>
      </a>
      <a class="card" href="#birthday">
        <div class="box box2">
          <img class="event img123" src="https://cdn.greenvelope.com/blog/wp-content/uploads/AdobeStock_133800814-scaled.jpeg" style="width: 300px; height: 300px;">
          <h2>Birthdays</h2>
        </div>
        <div class="bg"></div>
      </a>
      <a class="card" href="#org">
        <div class="box box3">
          <img class="event img123" src="https://www.panachemiddleeast.com/blog/wp-content/uploads/2017/03/2-1-1024x710.jpg" style="width: 300px; height: 300px;">
          <h2>Organization Events</h2>
        </div>
        <div class="bg"></div>
      </a>
    </div>
  </div>
</center>
<div class="weddings" id="weddings">
<h1>Weddings</h1>
<center><p>Wedding events were consider to be a hassle work for a upcoming married couples
It is fonding to provide a service that our catering business could provide in order the<br>
celebrant itself won't needed much to hassle for the fulfillment of their dream event.</p></center>
<div class="lab">
<div class="packs1">
    <p>   <b>Set A</b> <br>   The ideal catering food package for soon-to-wed couples for a maximum of 180 guests, which includes:</p>
    <li>Beef Menu, Chicken Menu, Pork Menu, and Fish Menu</li>
    <li>Pasta And Vegestable</li>
    <li>2 Dessert Salad</li>
    <li>Soup</li>
    <li>Rice</li>
    <li>Drinks (Coke,Sprite,Pepsi,Rc)</li>
    <h3>This package starts at ₱ 500 per head</h3>
  </div>
<br>
<div class="packs1">
    <p>   <b>Set B</b> <br>   The ideal catering food package for soon-to-wed couples for a maximum of 180 guests, which includes:</p>
    <li>Beef Menu, Chicken Menu, Pork Menu, Fish Menu, and SeaFood Menu</li>
    <li>Pasta And Vegestable</li>
    <li>2 Dessert Salad</li>
    <li>Soup</li>
    <li>Rice</li>
    <li>Drinks (Coke,Sprite,Pepsi,Rc)</li>
    <h3>This package starts at ₱ 600 per head</h3>
  </div>
<br>
<div class="packs1">
<li>Note!! price will varie from its maximum range</li>

</div>
<br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <a class="buttonm text-white "href="booking.php">Book Now</a>
<div class="packs1" style="background:transparent;">
 
</div>
</div>
</div>
<br>
<div class="birthday" id="birthday">
<h1>Birthdays</h1>
<center><p>Birthdays are the special occasions which people celebrate with friends and family.
  As this special day comes just once a year, the significance of this day augments
   naturally. <br>No other day can be better than Birthdays to inspire and motivate the 
  people to whom you care for. Many a time, when you think of expressing your feelings 
  <br>while writing a birthday message to a friend or family member, your mind goes blank 
  <br>and you are unable to fetch the most suitable words.</p></center>
<div class="lab">
  <div class="packs1">
    <p>The ideal catering package for soon-to-wed couples for a minimum of 100 guests, which includes:</p>
    <li>Full-Service Catering</li>
    <li>Reception Set-Up and Design</li>
    <li>An Events Planner is assigned to facilitate the planning and execution of your event</li>
    <li>Choice of complimentary wedding essentials</li>
    <h3>This package starts at<span>P 1,300 per head</span></h3>
  </div>
  <br>
  <div class="packs1">
    <p>The ideal catering package for soon-to-wed couples for 
    <br>a minimum of 100 guests, which includes:</p> 
    <li>Full-Service Catering</li>
    <li>Reception Set-Up and Design</li>
    <li>An Events Planner is assigned to facilitate the<br> planning and execution of your event</li>
    <li>Choice of complimentary wedding essentials</li>
    <h3>This package starts at P 1,100 per head</h3> 
  </div>
  <br> 
  <div class="packs1">
    <p>The ideal catering package for soon-to-wed couples for a minimum of 100 guests, which includes:</p>
    <li>Full-Service Catering</li>
    <li>Reception Set-Up and Design</li>
    <li>An Events Planner is assigned to facilitate the planning and execution of your event</li>
    <li>Choice of complimentary wedding essentials</li>
    <h3>This package starts at<span>P 1,300 per head</span></h3>
  </div><br><br><br>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <a class="buttonm text-white " href="booking.php">Book Now</a>
  <div class="packs1" style="background:transparent;">
  
  </div>
</div>
</div>
<div class="birthday" id="org">
  <h1>Organizational Events</h1>
  <center><p>Birthdays are the special occasions which people celebrate with friends and family.
    As this special day comes just once a year, the significance of this day augments
     naturally. <br>No other day can be better than Birthdays to inspire and motivate the 
    people to whom you care for. Many a time, when you think of expressing your feelings 
    <br>while writing a birthday message to a friend or family member, your mind goes blank 
    <br>and you are unable to fetch the most suitable words.</p></center>
    <div class="lab">
<div class="packs1">
    <p>   <b>Set A</b> <br>   The ideal catering food package for soon-to-wed couples for a maximum of 180 guests, which includes:</p>
    <li>Beef Menu, Chicken Menu, Pork Menu, Fish Menu, and SeaFood Menu</li>
    <li>Pasta And Vegestable</li>
    <li>2 Dessert Salad</li>
    <li>Soup</li>
    <li>Rice</li>
    <li>Drinks (Coke,Sprite,Pepsi,Rc)</li>
    <h3>This package starts at ₱ 600 per head</h3>
  </div>
  <br>
  <div class="packs1">
    <p>   <b>Set B</b> <br>   The ideal catering food package for soon-to-wed couples for a maximum of 180 guests, which includes:</p>
    <li>Beef Menu, Chicken Menu, Pork Menu, Fish Menu, and SeaFood Menu</li>
    <li>Pasta And Vegestable</li>
    <li>2 Dessert Salad</li>
    <li>Soup</li>
    <li>Rice</li>
    <li>Drinks (Coke,Sprite,Pepsi,Rc)</li>
    <h3>This package starts at ₱ 600 per head</h3>
  </div>
  <br> 
  <div class="packs1">
    <p>   <b>Set B</b> <br>   The ideal catering food package for soon-to-wed couples for a maximum of 180 guests, which includes:</p>
    <li>Beef Menu, Chicken Menu, Pork Menu, Fish Menu, and SeaFood Menu</li>
    <li>Pasta And Vegestable</li>
    <li>2 Dessert Salad</li>
    <li>Soup</li>
    <li>Rice</li>
    <li>Drinks (Coke,Sprite,Pepsi,Rc)</li>
    <h3>This package starts at ₱ 600 per head</h3>
  </div>
  <br>
  <div class="packs1">
    <p>   <b>Set B</b> <br>   The ideal catering food package for soon-to-wed couples for a maximum of 180 guests, which includes:</p>
    <li>Beef Menu, Chicken Menu, Pork Menu, Fish Menu, and SeaFood Menu</li>
    <li>Pasta And Vegestable</li>
    <li>2 Dessert Salad</li>
    <li>Soup</li>
    <li>Rice</li>
    <li>Drinks (Coke,Sprite,Pepsi,Rc)</li>
    <h3>This package starts at ₱ 600 per head</h3>
  </div>  <br>
  <div class="packs1">
<li>Note!! price will varie from its maximum range</li>

</div>
  <br>
  <br><br>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <a class="buttonm text-white " href="booking.php">Book Now</a>
  <div class="packs1" style="background:transparent;">
  
  </div>
</div>
  </div>
</body>


  <br><br><br><br><br><br><br>
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