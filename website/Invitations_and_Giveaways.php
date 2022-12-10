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
<style>
  body {
    background-image: url('https://img.freepik.com/premium-vector/nude-with-orange-liquid-ink-painting-abstract-background_250889-184.jpg?w=2000');
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
    <div class="w3-container w3-center w3-animate-"><p style="text-align: right; font-family: Harrington; font-weight: bold; font-size: 70px;">Invitations and Giveways</p></div>
  </div>
  <p class="invi" style="font-size: 25px;">What's a party without an invitations and giveaways for your guest. As for the our catering service,<br>
  we provide a creative service in terms of managing and creating an aesthetic invitations and giveaways <br>
  that you may distribute for your ocassions that will sure happily interact you and your guest.<br> <a href="booking.php"><button  class="button-81" type="button">Grab Service</button></a> </p>
  <center><p style="font-family: Harrington; font-weight: bold; font-size: 40px;">Sample offers</p></center>
  <div class="invipics">
  <center>
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
  <img class="o" src="data:image/jpeg;base64,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" style="  height: 300px; width: 300px;">
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