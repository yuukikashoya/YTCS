<!DOCTYPE html>
<?php
include"../code/status.php";

?>

<html>
    <head>
  <meta charset="utf-8">
  <title>chat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- <meta http-equiv="refresh" content="5"> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>





<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/chat.css">
    </head>
   
    <body style="background-color: #f3d8c4 ;">
    <center><nav>
	 		 
      
        
        <ul>
        
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="design_about.php">ABOUT</a></li> 
          <li><a href="gallery.php">GALLERY</a></li> 
        <img class="img2" src="Add a subheading.png">	          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"style="color: white;">SERVICE</a> 
             <ul class="dropdown-menu"> 
              <li><a href="booking.php">Booking</a></li> 
              <li><a href="chat.php">Chat</a></li> 

              <li><a href="services.php">Other Services</a></li> 

             </ul> 
             </li> 	
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color: white;">NOTIFICATIONS</a> 
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
         <a class="dropdown-toggle" data-toggle="dropdown"style="color: white;"><i class="fas fa-align-justify"></i></a> 
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
<?php 

$outgoing_id = $_SESSION['unique_id'];
$idOfOutgoing = '212121';
$incoming_id = mysqli_real_escape_string($conn, $idOfOutgoing);
$output = "";
$sql = "SELECT * FROM message LEFT JOIN client ON client.unique_id = message.outgoing_msg_id
        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
        OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        if($row['outgoing_msg_id'] === $outgoing_id){
            $output .= '<div class="chat outgoing">
                        <div class="details">
                            <p>'. $row['msg'] .'</p>
                        </div>
                        </div>';
        }else{
            $output .= '<div class="chat incoming">
                      
                        <div class="details">
                            <p>'. $row['msg'] .'</p>
                        </div>
                        </div>';
        }
    }
}else{
    $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
}




?>



     <div class="wrapper">
    <section class="chat-area">
      <header>

        <div class="details">
        <h1 class="badge">Admin</h1>
    
       
      </header>
   
      <div class="chat-box" id="Middle">
           <span id="chat">
     <?php 
                              
                              echo $output
                              
                              ?>
  </span>
      </div>
      <script>
    var div = document.getElementById("Middle");
    div.scrollTop = div.scrollHeight;
  </script>
    </section>
      <form method="POST" action="../code/sendChat.php" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="212121
    
         " hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button type="submit" name="sendbutton"><i class="fab fa-telegram-plane"></i></button>
      </form>
  </div>


      



  <script>
    setInterval( function() {
  $('#chat').load(location.href + " #chat")
}, 1000);


  </script>
  <script>
$('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
  </script>



  
    </body>
</html>