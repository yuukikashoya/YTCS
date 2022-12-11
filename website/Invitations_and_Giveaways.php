<?php
session_start();
include"../database/connecting_to_DB.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Invitations and Giveaways</title>
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
  body {
    background-image: url('https://i.pinimg.com/originals/49/59/6b/49596b5d500c62ebdb88550236459b39.jpg');
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
  .invititle{
    padding-right: 2em;
    background-color: white;
    background-size: 100% 100%;  
  }
</style>
<body class="me">
    <center><nav>
    
	 		 

        
      <ul>
        
        <li><a href="index.php"><i class="fas fa-home"></i></a></li>
        <li><a href="design_about.php">ABOUT</a></li> 
        <li><a href="gallery.php">GALLERY</a></li> 
        <img class="img2" src="https://i.pinimg.com/736x/e9/60/86/e96086161caad546aba41b027daacee4.jpg">	        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICE</a> 
             <ul class="dropdown-menu"> 
              <li><a href="booking.php">Booking</a></li> 
              <li><a href="chat.php">Chat</a></li> 

              <li><a href="services.php">Other Services</a></li> 

             </ul> 
             </li> 	
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">NOTIFICATIONS<i class="fas fa-bell"></i></a> 
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

    
  </nav></center>

  <div class="invititle">
    <div class="w3-container w3-center w3-animate-"><p style="text-align: right; font-family: Harrington; font-weight: bold; font-size: 70px; padding-top: 2em; 
    padding-bottom: 40px;"">Invitations and Giveways</p></div>
 
  <p class="invi" style="font-size: 25px; margin-bottom: 2.5em; text-align: right; ">What's a party without an invitations and giveaways for your guest. As for the our catering service,<br>
  we provide a creative service in terms of managing and creating an aesthetic invitations and giveaways <br>
  that you may distribute for your ocassions that will sure happily interact you and your guest.<br> <a href="booking.php"><button  class="button-81" type="button">Grab Service</button></a> </p><br>
  <center></center>
</div>

  <div class="invipics">
  <center>
  <p style="font-family: Harrington; font-weight: bold; font-size: 40px; ; margin-top: 1em;"> Sample offers</p>  
  <img class="o" src="https://static.vecteezy.com/system/resources/previews/000/249/592/original/wedding-invitation-card-template-with-decorative-floral-backgrou-vector.jpg" style="  height: 300px; width: 300px;">
  <img class="o" src="http://unblast.com/wp-content/uploads/2020/09/Wedding-invitation-Template-2.jpg" style="  height: 300px; width: 300px;">
  <img class="o" src="https://cdn.utterlyprintable.com/products/personalised-wedding-invitation-rose-roof-portrait-a5-flat-1-pink-medium.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://rlv.zcache.co.nz/elegant_magnolia_white_and_blush_wedding_invitation-r2f87c7470f7042a7b7ec37316024974d_tcv5l_324.jpg?square_it=true" style="height: 300px; width: 300px;">
  <img class="o" src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq5sqKHqc6dkAf1wsSl5zAQT-DOOH2vdJUpUXwfC_Fnc1FyZNKuDEk2jD3XhbvvOcGt4o&usqp=CAU" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.shineweddinginvitations.com/wp-content/uploads/Natalie-Wedding-Invitations-1.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.theknot.com/tk-media/images/86b0979f-8d85-4ecd-9b1d-fa49917f2019~rs_768.h" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.theknot.com/tk-media/images/86b0979f-8d85-4ecd-9b1d-fa49917f2019~rs_768.h" style="height: 300px; width: 300px;">
  <img class="o" src="https://i.etsystatic.com/16089506/r/il/ae4312/2723508498/il_570xN.2723508498_ga1y.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.paperdivas.com.au/media/catalog/product/cache/aca482c6180221f09a6732d5de028f56/m/o/moss_-sage-green-wedding-invitations.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj0V3PE66f3vEG4q4ON6P0ATf5aiWZh_VF9he48WVX4jO1ZifJwjJy8pInHYXGju-HjuE&usqp=CAU" style="height: 300px; width: 300px;">
  <img class="o" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUiE1U4nk6_IurHwrZ0OfJac2qFLt10u4KE52N9HP4h8K592SvoEpMvzL3nwZqVCSFQkE&usqp=CAU" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.claritynco.com/media/catalog/product/cache/0abd4ef43c6ec37ad52161df11406d70/c/a/cax028-1.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.claritynco.com/media/catalog/product/cache/0abd4ef43c6ec37ad52161df11406d70/g/r/greenery_floral_geometric_acrylic_wedding_invitations_cax069_6_.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://images.squarespace-cdn.com/content/v1/535be2c8e4b055c269be8bd5/d9b144ca-0d5a-433c-87e5-eb5670299c9f/FACR12_2.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.paperdivas.com.au/media/catalog/product/cache/aca482c6180221f09a6732d5de028f56/t/r/tropical-fern-wedding-invitations-printed-australia.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://149690653.v2.pressablecdn.com/wp-content/uploads/2018/11/IMG_7739-1.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.paperdivas.com.au/media/catalog/product/cache/aca482c6180221f09a6732d5de028f56/w/e/wedding-invitations-native-greenery.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://cdn0.weddingwire.com/article/3310/3_2/960/jpg/20133-2.jpeg" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.brides.com/thmb/fOQjtagjYKqEUAs7sjpeIVJb9qY=/fit-in/1500x640/filters:no_upscale():max_bytes(150000):strip_icc()/AmazonHandmade-e2092b6f16264048b00910956203e795.jpg" style="height: 300px; width: 300px;">
  </div> 
 </center> 
 
 
 <center><p style="font-family: Harrington; font-weight: bold; font-size: 40px;">Sample Giveaways</p></center>
  <div class="invipics">
  <center>
  <img class="o" src="https://www.theknot.com/tk-media/images/feb31918-e606-4ddd-ae38-b3fafc82052c~rs_768.h" style="  height: 300px; width: 300px;">
  <img class="o" src="https://cf.shopee.ph/file/6a11afc0226c2d0e52de7451364f71ca" style="  height: 300px; width: 300px;">
  <img class="o" src="https://cf.shopee.ph/file/44e92c7389d2ea1ac6f8bbf11a9ac162" style="height: 300px; width: 300px;">
  <img class="o" src="https://i0.wp.com/vivagifts.in/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-20-at-3.41.41-PM-1-min.jpeg?fit=1022%2C1023&ssl=1" style="height: 300px; width: 300px;">
  <img class="o" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBg9BMm23Rch6e8IJbYoiJEoRvnQxEbUlcsg&usqp=CAU" style="height: 300px; width: 300px;">
  <img class="o" src="https://ruffledblog.com/wp-content/uploads/2020/05/pressedflowerplacecards.jpg" style="height: 300px; width: 300px;">
  <img class="o" src="https://www.theknot.com/tk-media/images/9e7e426e-265f-4184-a8f6-8e6a7e45a2e7~rs_768.h" style="height: 300px; width: 300px;">
  <img class="o" src="https://assets-metrostyle.abs-cbn.com/prod/metrostyle/attachments/ba4cf20c-16a4-4edc-b74e-76cf707223c7_11.jpg" style="height: 300px; width: 300px;">
  </div> 
 </center> 
</body>

<br><br><br><br><br><br><br>
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