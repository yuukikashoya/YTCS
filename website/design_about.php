<?php

session_start();
include"../database/connecting_to_DB.php";
?>
<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <title>About Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<style>
.img2{
  height: 80px;
  width: 80px;
  border-radius: 50%;
  border: 2px solid #000;
}
nav{
  height: 55px;
  background: url('../img/pud2.png');
  background-repeat: no-repeat;
  background-size: auto;
  /* background-position: center; */
  /* background: transparent; */
  /* background-size: 120px; */
  /* box-shadow: 0 3px 15px rgba(0,0,0,.4); */
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  text-decoration: none;
}
nav ul{
  /* float: right; */
  margin-right: 30px;
  text-decoration: none;
}
nav ul li{
  display: inline-block; 
  transition: all .2s ease;
  text-decoration: none;
  
}
nav ul li a{
  color: rgb(255, 255, 255);
  display: block;
  padding: 5px 15px;
  line-height: 40px;
  font-size: 18px;
  /* background: #db6a1a; */
  transition: all .5s ease;
  /* border-radius: 25px; */
  text-decoration: none;
}
nav ul li a:hover{
  background-image: url('https://cdn.iconscout.com/icon/free/png-256/food-dish-2634600-2187288.png');
  background-size: 80% 110%;
  background-repeat: no-repeat;
  color: white;
  animation: spring 300ms ease-out;
  text-shadow: 2px 2px 8px #c12b11;
  font-weight: bold;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
}

nav ul ul{
  position: absolute;
  top: 85px;
  border-top: 3px solid #23dbdb;
  opacity: 0;
  visibility: hidden;
  text-decoration: none;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 50;
  visibility: visible;
  transition: .3s linear;
  text-decoration: none;
}
nav ul ul li{
  width: auto;
  display: list-item;
  position: relative;
  /* border: 1px solid #042331; */
  border-top: none;
  text-decoration: none;
}
* {box-sizing:border-box}
.dropdown-menu{
  background-color: rgb(250, 139, 43);

}

    body{
      background: url('https://coolwallpapers.me/picsup/2958276-pattern-wood___mixed-wallpapers.jpg');
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    .ih1{
      text-align: right;
      color: black;
      padding-right: 3em;
      font-size: 4em;
      -webkit-text-stroke: 0.1vw rgb(255, 255, 255);
    }

    /* .container1{
      height: 20%;

      border-radius: 10px;    
      margin-left: auto;
      margin-right: auto;
    } */
    .oppo{
      text-align: center;

    }
    p{
      font-size: 123%;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  text-align: justify;
      padding-top: 10px;
      margin-right: 2em;
      margin-left: 2em;
      color: white;
      font-weight: 5em;
    
 
    }
    .about_img{
      width: 350px;
      border-style: solid;
      box-shadow: 10px 10px 5px rgb(250, 139, 43);
      float: left;
      margin-left: 8em;
      margin-right: 15em; 
    }
    .title{
      color: white;
      font-weight: bold;
      display: inline-block;
      font-family: Arial;
    
    }
    .map{
      border-style: solid;
      /* box-shadow: 10px 10px 5px grey; */
      float: right;
      margin-left: 8em;
      margin-right: 2em;
      padding-top: 40px;   
      padding-bottom: 40px;    
    }
    .ummmm{
      background: url('https://i.pinimg.com/736x/e6/7d/af/e67daf68a6e8f6d4a9283cb7d64b098c.jpg'); 
      background-size: 100% 100%;  
    }
    .pap{
    text-align: center;
    color: black;
    font-family: Calibri;
  }
  .hi{
    font-weight: bold;
    margin-bottom: .5px;
    margin-top: 8px;
    text-align: center;
    font-family: fantasy;
    color: rgb(160, 93, 26);
    position: relative;
    font-size: 2.5vw;
    -webkit-text-stroke: 0.1vw rgb(255, 255, 255);
    text-transform:uppercase;
  }
  h3 {
    color: white;
    text-shadow: 2px 2px black;
}
  .img2{
  height: 60px;
  width: 60px;
  border-radius: 50%;
}
footer {
      text-align: center;
      padding: 1px;
      background-color: #d97f3c;
      color: black;
      width: 100%;
      position: relative;
      margin-top: -90px;
      columns: 70px 3;    
      position: relative;
    }
    .contactf {
    outline: none;
    font-family: Roboto, Arial, sans-serif;
    font-size: 14px;
    color: black;
    line-height: 22px;
}
h3{
  font-family: 'Lily Script One';
}
.butt{
  border-radius: 50%;
  background-color: black;
}
.small{
  color: white;
  text-shadow: 2px 2px black;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;
}
</style>

</head>
<body>
  <center>
<nav>
	 
      
        
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
     </nav>
            </center>
    <br><br>

    <div class="oppo">
    <h1 class="ih1" >About Us</h1>

    <img class="about_img" src="Add a subheading.png">
    <br><br><br><br>
  
  <p >Yani & Tin-tin catering service have already served for more than 3 decades with the quality of variety of aspects. The name was originated
    from the 2 daughters of the owner. The owner were past Hotel and Restaurant employee where they cope skills that they indeed somehow learned from 
    their years of experience. As they finally settled down on their personal life by handling to children, they decided to build up their family business 
    that lead them by having a catering service. As the time flies, the business certainly earn its reputation by providing satisfactory to its clients.
  </p><br><br><br>
    
    </div>
    <div class="ummmm">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d220.9606822557443!2d123.75840021998812!3d13.19886645151466!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sph!4v1669300050382!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <p style="color: white; font-size: 60px; font-weight: bolder; -webkit-text-stroke: 3.5px black; text-position: left;"><br>Location<br></p><p style="color: white;">Zone 7. Tinago St. Bigaa, Legazpi city. Albay<br>
    Postal code: 4501<br>
  Contact No.<br>
  Mobile: 09663955462<br>
  09319919517<br>
  Email: myadmin.123@gmail.com<br><br><br><br><br><br><br></p>
    </div>

    </body>
    <footer>
  <div class="pap">	 
  <h1 class="hi"> <img class="img2" src="Add a subheading.png">	Yani and Tin-tin Catering Service</h1><h3>A taste you'll remember.</h3><br>
     </div>
  <p><a href="login.php"><button class="butt" type="button" ><img class="img2" src="https://www.freepnglogos.com/uploads/black-email-logo-png-0.png"><br></button></a>
  <br><a href="gallery.php">Gallery</a><br><a href="design_about.php">About</a><br></p><br>
  <h3 class="small">You may also Contact Us</h3>
  <p><i class="fa fa-phone" style="font-size:25px"></i>Mobile: 09663955462<br> 09319919517<br>
  </p>
</footer>
</html>

