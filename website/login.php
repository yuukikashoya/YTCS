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

<style>
  img{
      height: 60px;
      width: 60px;
      border-radius: 50%;
  }
  nav{
  height: 50px;
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
  color: white;
  background-color: rgb(2, 1, 0);
  box-shadow: 0 0 30px rgb(186, 104, 30);
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
  /* border: 1px solid #042331; */
  border-top: none;
  text-decoration: none;

}

nav ul ul li a i{
  margin-left: 45px;
  text-decoration: none;
}
* {box-sizing:border-box}
.dropdown-menu{
  background-color: rgb(250, 139, 43);

}
* {box-sizing:border-box}

  
  * {box-sizing:border-box}
  
  /* Slideshow container */
  .slideshow-container {
    max-width: 650px;
    position: relative;
    margin: auto;
    height: 300px;
  }
  
  /* Hide the images by default */
  .mySlides {
    display: none;
  }
  
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active, .dot:hover {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }
  body{
    background-color: #f3d8c4;

  }
  .container{
    font-family: Forte;
    text-align: center;
    width: 500px;
  }
  .button{
    background-color: #4CAF50;
    margin: 50px;
    font-family: inherit;
    font-size: 20px;
    font-weight: 200;
    letter-spacing: 1px;
    padding: 13px 50px 13px;
    outline: 0;
    border: 1px solid black;
    cursor: pointer;
    position: relative;
    background-color: rgba(0, 0, 0, 0);
  }
  .button::after {
    content: "";
    background-color: #4CAF50;
    width: 100%;
    z-index: -1;
    position: absolute;
    height: 100%;
    top: 7px;
    left: 7px;
  }
  .img1{
    height: 400px;
    width: 650px;
    position: center;
  }





.ct{
  text-align: center;

}


/* Add a red background color to the cancel button */
.cancel {
  background-color: red;
  color: white;
  
}

/* Add some hover effects to buttons */
/* .form-container .btn:hover, .open-button:hover {
  opacity: 1;
} */




/* form log in 0*/
.main{
	width: 350px;
	height: 600px;
  background: #894919;
	overflow: hidden;
	margin-left: auto;
  margin-right: auto;

	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
  
}

#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 50px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
.buttonz{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.buttonz:hover{
	background: #6d44b8;
}
.login{
	height: 600px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.9);
}

#chk:checked ~ .login{
	transform: translateY(-600px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.9);
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
       
       </ul>
     </nav>

      <div class="container">
      


 
  <div class="main"> 
  
   
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="../code/register.php">
					<label for="chk" aria-hidden="true">Sign up</label>
          <input type="text" name="name" placeholder="Full Name" required="">
					<input type="text" name="username" placeholder="User name" required="">
          <input type="text" name="address" placeholder="address" required="">
          <input type="number" name="contact" placeholder="contact" required="">
          <input type="date" id="birthday" name="birthday">
          <input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
          <input type="password" name="confirm" placeholder="Confirm password" required="">
					<button  type="submit" name="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="POST" action="../code/login.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="User Name" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="submit1">Login</button>
				</form>
			</div>
	</div>



      </div>
    </body>
</html>