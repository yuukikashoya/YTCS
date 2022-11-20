<?php include"../../database/connecting_to_DB.php";
session_start();
if(!isset($_SESSION['adminLogin'])){ //if login in session is not set
  header('Location: ../../website/login.php?message=Log in');
}


?>

<html>
    <head>
    <title>Display</title>
    <meta charset="utf-8">

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
   
    </head>
 
    <body class="WebContainer">


      <div class="sidebar">
    <div class="logo-details">
      <i class=' bx bx-user-circle'></i>
      <span class="logo_name">Menu</span> 
    </div>
      <ul class="nav-links">
        <li>
          <a href="display.php" class="active">
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
          <a href="adminGallery.php" >
            <i class='	bx bx-chat' ></i>
            <span class="links_name">Gallery</span>
          </a>
        </li>

        <li>
          <a href="../adminCode/adminLogout.php">
            <i class='	bx bx-log-out' ></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
        <div class="logo-details">
        <i class='	bx bx-select-multiple' ></i>
    
      <span class="logo_name">Options</span>
    </div>
    <li>
          <a href="#top">
            <i class='	bx bx-table' ></i>
            <span class="links_name">Booking</span>
          </a>
        </li>
        <li>
          <a href="#client">
            <i class='	bx bx-table' ></i>
            <span class="links_name">client</span>
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

<div class="container  center  home-content" id="top">
     
<!-- gallery -->

<div  class=" jumbotron jumbotron-fluid outerdiv">
<h3> <span class="label label-default">Booking List</span>  </h3>
  <table  class="table table-bordered  poit" id="Booking">
  <thead>
  <tr>
<th  scope="col" class="idHeader">Service ID</th>
<th scope="col">Client Username</th>
<th scope="col">Client Name</th>
<th scope="col">Client  Email</Address></th>
<th scope="col">Contact</th>
<th scope="col">Bundle</th>
<th scope="col">PAX</th>
<th scope="col">Time</th>
<th scope="col">Day</th>
<th scope="col">location</th>
<th scope="col"  style="width: 20px;">View</th>



  </tr>
  </thead>
  <?php
				$sql_query1 = "SELECT * FROM service";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$display_id = $row1['service_id'];
			?>

    <tr>
<td  scope="row"><?php echo $row1['service_id'];?></td>
<td  scope="row"><?php echo $row1['client_username'];?></td>
<td  scope="row"><?php echo $row1['client_name'];?></td>
<td  scope="row"><?php echo $row1['email'];?></td>
<td  scope="row"><?php echo $row1['contact'];?></td>
<td   scope="row"><?php echo $row1['bundle'];?></td>
<td  scope="row"><?php echo $row1['pax'];?></td>

<td><?php echo $row1['time_start'] , '-', $row1['time_ends'] ;?></td>
<td><?php echo $row1['date'];?></td>
<td><?php echo $row1['street'] , '. ', $row1['city'] , '. postal code ',$row1['postal_zip_code'] ;?></td>


<td class="center"> 	<a href="=<?php echo $display_id; ?>"> <iconify-icon icon="carbon:view-filled"style='font-size:25px;color:black'></iconify-icon></a></td>

<?php		
				}
			?>
    </tr>


</table>


</div>



<!-- client -->




<div  class="jumbotron jumbotron-fluid outerdiv">
<h3> <span class="label label-default">User List</span>  </h3>
  <table id="client" class="table table-bordered ">
  <thead>
  <tr>
<th class="idHeader">Client ID</th>
<th>Client Name</th>
<th>Client Username</th>
<th>Client  Address</Address></th>
<th>Contact</th>
<th>Birthday</th>
<th>Email</th>
<th  style="width: 30px;">Status</th>
<th  style="width: 20px;">Chat</th>



  </tr>
  </thead>
  <?php
				$sql_query1 = "SELECT * FROM client";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$client_id = $row1['client_id'];
			?>

    <tr>
<td ><?php echo $row1['client_id'];?></td>
<td ><?php echo $row1['client_name'];?></td>
<td ><?php echo $row1['client_username'];?></td>
<td ><?php echo $row1['address'];?></td>
<td ><?php echo $row1['contact'];?></td>
<td><?php echo $row1['birthday'];?></td>
<td class="dor"><?php echo $row1['email'];?></td>
<td><?php echo $row1['status'];?></td>
<td class="center"> 	<a href="adminChat.php?client_id=<?php echo $client_id; ?>">  <i class='	bx bx-chat' style='font-size:25px;color:black'></i></a></td>

<?php		
				}
			?>
    </tr>


</table>



</div>


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







    <script>  
 $(document).ready(function(){  
   
      $('#Booking').DataTable(); 
      $('#client').DataTable(); 
    
 });  
 </script>  
