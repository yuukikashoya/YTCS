<?php include"../../database/connecting_to_DB.php";
session_start();
if(!isset($_SESSION['adminLogin'])){ //if login in session is not set
  header('Location: ../../website/login.php?message=Log in');
}


?>

<html>
    <head>
    <title>Chat</title>
    <meta charset="utf-8">

    <!-- <meta http-equiv="refresh" content="5"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
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









    <link rel="stylesheet" href="../adminCSS/pog.css">
    <link rel="stylesheet" href="../adminCSS/chat.css">
   
    </head>
 
    <body class="WebContainer">


      <div class="sidebar">
    <div class="logo-details">
      <i class=' bx bx-user-circle'></i>
      <span class="logo_name">Menu</span> 
    </div>
      <ul class="nav-links">
        <li>
          <a href="display.php" >
            <i class='	bx bx-list-ul' ></i>
            <span class="links_name">Display</span>
          </a>
        </li>
        <li>
          <a href="adminlist.php">
            <i class='	bx bx-user-pin' ></i>
            <span class="links_name">Admin</span>
          </a>
        </li>
        <li>
          <a href="chatList.php" class="active">
            <i class='	bx bx-chat' ></i>
            <span class="links_name">Chat</span>
          </a>
        </li>

        <li>
          <a href="../adminCode/adminLogout.php">
            <i class='	bx bx-log-out' ></i>
            <span class="links_name">Log out</span>
          </a>
        </li>

        
      
      
      </ul>
  </div>


<section class="home-section ">
    <nav>

      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
         <span class="dashboard">Admin:</span> <?php echo $_SESSION["adminName"];?> &nbsp; <span class="dot"></span>
   
    </nav>

    <?php
		$client_id = $_GET['client_id'];
		$sql_query = "SELECT * FROM client WHERE client_id='$client_id' ";
		
		$result = $conn -> query($sql_query);
		
		while($row = $result -> fetch_assoc()){
		
            $client_name = $row['client_name'];
            $unique_id_user = $row['unique_id'];
            
		}
		
		

    $outgoing_id = '212121';
    $idOfOutgoing =  $unique_id_user;
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
	






<div class="container  center  home-content add" >


  

<div class="wrapper add" >
    <section class="chat-area">
      <header>

        <div class="details seven">
        <h1 class="badge ">client: <?php echo $client_name; ?></h1>
    
       
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
      <form method="POST" action="../adminCode/sendChat.php" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="  <?php                           
                              echo $unique_id_user; 
                             ?> " hidden>
         <input type="text" class="incoming_id" name="ss" value="  <?php                           
                              echo $client_id; 
                             ?> " hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button type="submit" name="sendbutton"><i class="fab fa-telegram-plane"></i></button>
      </form>
  </div>










  </div>
        </section>
        <script>
    setInterval( function() {
  $('#chat').load(location.href + " #chat")
}, 1000);




   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
    </body>
    </html>

