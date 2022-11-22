<?php include"../../database/connecting_to_DB.php";
session_start();
if(!isset($_SESSION['adminLogin'])){ //if login in session is not set
  header('Location: ../../website/login.php?message=Log in');
}


?>

<html>
    <head>
    <title>Gallery</title>
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
  <link rel="stylesheet" href="../adminCSS/listchat.css">
    
   
    </head>
 
    <body class="WebContainer">


      <div class="sidebar">
    <div class="logo-details">
      <i class=' bx bx-user-circle'></i>
      <span class="logo_name">Menu</span> 
    </div>
      <ul class="nav-links">
        <li>
          <a href="display.php"  class="active">
            <i class='	bx bx-list-ul' ></i>
            <span class="links_name">Booking</span>
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
          <a href="adminGallery.php">
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




<section class="home-section ">
    <nav>

      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
         <span class="dashboard">Admin:</span> <?php echo $_SESSION["adminName"];?> &nbsp; <span class="dot"></span>
   
    </nav>

<div class="container  center  home-content" >






<?php
		$service_id  = $_GET['service_id'];
		$sql_query = "SELECT * FROM service WHERE service_id ='$service_id ' ";
		
		$result = $conn -> query($sql_query);
		
		while($row = $result -> fetch_assoc()){
			$service_id  = $row['service_id'];
	?>

                <div class="jumbotron jumbotron-fluid">

 <h3><span class="label label-default" style="text-align: center;">User </span></h3>
             <h1  > <?php echo $row['client_name'];?></h1>
             <p  ><b>email:</b> <?php echo $row['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>contact:</b>: <?php echo $row['contact'];?></p>
             <h3><span class="label label-default" style="text-align: center;">Bundle </span></h3>
             <p  ><b>Bundle:</b> <?php echo $row['bundle'];?>  &nbsp;&nbsp;&nbsp; <b>Pax:</b>: <?php echo $row['pax'];?> &nbsp;&nbsp;&nbsp; <b>Photography:</b>: <?php echo $row['photo'];?></p>
             <p  ><b>Time Start:</b> <?php echo $row['time_start'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Time Ends:</b>: <?php echo $row['time_ends'];?></p>
             <p  ><b>Date:</b> <?php echo $row['date'];?></p>
             <p  ><b>Location:</b>   <?php echo $row['street'] , '. ', $row['city'] , '. postal code ',$row['postal_zip_code'] ;?></p>


           
                    </div>        
        
  
	<?php
		}
		
		$conn->close();
	?>
	

	</div>
        </section>




    </body>
    </html>
<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  side
  barBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
$('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
</script>