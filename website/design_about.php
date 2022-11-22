<?php

session_start();

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
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }
    nav{
  height: 70px;
  background: black;
  background-size: 120px;
  box-shadow: 0 3px 15px rgba(0,0,0,.4);
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  text-decoration: none;
  
}
nav ul{
  float: right;
  margin-right: 30px;
  text-decoration: none;
}
nav ul li{
  display: inline-block;
  transition: all .2s ease;
  text-decoration: none;
}
nav ul li a{
  color: black;
  display: block;
  padding: 8px 25px;
  line-height: 50px;
  font-size: 20px;
  background: #eab995;
  transition: all .5s ease;
  border-radius: 25px;
  text-decoration: none;
}
nav ul li a:hover{
  color: black;
  background-color: white;
  box-shadow: 0 0 10px blue;
  text-decoration: none;
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
  border: 1px solid #042331;
  border-top: none;
  text-decoration: none;
}
nav ul ul li a{
  line-height: 50px;
  text-decoration: none;
}
nav ul ul ul{
  border-top: none;
  text-decoration: none;
}
nav ul ul ul li{
  position: relative;
  top: -70px;
  left: 150px;
  text-decoration: none;
}
nav ul ul li a i{
  margin-left: 45px;
  text-decoration: none;
}
* {box-sizing:border-box}

    body{
      background-color: #f3d8c4;
    }
    h1{
      text-align: center;
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
      font-size: 18px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: bold;
  text-align: center;
      padding-top: 30px;
    
 
    }
    .about_img{
      width: 400px;
      border-style: solid;
      box-shadow: 10px 10px 5px grey;
    }
    .title{
      color: white;
      font-weight: bold;
      display: inline-block;
      font-family: Arial;
    
    }
    
</style>

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
    <br><br>

    <div class="oppo">
    <h1 class="ih1">About Us</h1>

    <img class="about_img" src="Add a subheading.png">
  
  <p >Yani & Tin-tin catering service have already served for more than 3 decades with the quality of variety of aspects. The name was originated
    from the 2 daughters of the owner. The owner were past Hotel and Restaurant employee where they cope skills that they indeed somehow learned from 
    their years of experience. As they finally settled down on their personal life by handling to children, they decided to build up their family business 
    that lead them by having a catering service. As the time flies, the business certainly earn its reputation by providing satisfactory to its clients.
  </p>
    
    </div>
    </body>
</html>