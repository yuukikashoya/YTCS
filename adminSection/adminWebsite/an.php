<?php include"../../database/connecting_to_DB.php";
session_start();
if(!isset($_SESSION['adminLogin'])){ //if login in session is not set
  header('Location: ../../website/login.php?message=Log in');
}


?>

<html>
    <head>
    <title>Announcement</title>
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
 
    <body class="WebContainer" >


      <div class="sidebar">
    <div class="logo-details">
      <i class=' bx bx-user-circle'></i>
      <span class="logo_name">Menu</span> 
    </div>
      <ul class="nav-links">
        <li>
          <a href="display.php" >
            <i class='	bx bx-list-ul' ></i>
            <span class="links_name">Booking</span>
          </a>
        </li>
        <li>
          <a href="an.php" class="active">
            <i class='	bx bx-bell' ></i>
            <span class="links_name">Announcement</span>
          </a>
        </li>
        <li>
          <a href="adminlist.php">
            <i class='	bx bx-user-pin' ></i>
            <span class="links_name">Admin</span>
          </a>
        </li>
        <li>
          <a href="chatList.php" >
            <i class='	bx bx-chat' ></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        <li>
          <a href="adminGallery.php" >
            <i class='	bx bx-camera' ></i>
            <span class="links_name">Gallery</span>
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


<section class="home-section " >
    <nav>

      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
         <span class="dashboard">Admin:</span> <?php echo $_SESSION["adminName"];?> &nbsp; <span class="dot"></span>
   
    </nav>


<div class="container  center  home-content" id="top">

<div class="container  center">
                <div class="jumbotron jumbotron-fluid bg-dark ">
                    
                        <h3> <span class="label label-default">Announcement</span>  </h3>
                        <form method="POST" class="left" action="../adminCode/addan.php">

                                    
                            <textarea name="announcement" class="lan text-black" placeholder="Enter text here..."></textarea>
    
                            <input type="submit" class="btn btn-primary" name="submit">
                        </form>
                    </div>        
            </div>



            <?php


//  $query = "SELECT * FROM announcement";$query =" SELECT * FROM `announcement` WHERE an_id=(SELECT MAX(an_id) FROM `announcement`);";
$query =" SELECT * FROM announcement ORDER BY an_id DESC LIMIT 1000";

 if ($result = $conn->query($query)) {


     while ($row = $result->fetch_assoc()) {
$an_id = $row["an_id"];
?>
 <div class="container   ">
            <div class="jumbotron jumbotron-fluid bg-dark text-white"> <a href="../adminCode/delan.php?an_id=<?php echo $an_id; ?>"><i class='	bx bx-trash' style="color: red;font-size:2em;float:right;"></i></a>
            <div class="shesh "><?php
              echo $row["an"]; 
             ?></div>
         </div> 


                </div>

                <?php

 }

 $result->free();
 }

        ?>






  </div>
  </section>
        <script>


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

