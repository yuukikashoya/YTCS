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
          <a href="display.php" >
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
          <a href="adminGallery.php" class="active">
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

<div class="container  center  home-content" id="top">
<div  class="jumbotron jumbotron-fluid outerdiv">
<h3> <span class="label label-default">Upload</span>  </h3>
                        <form enctype="multipart/form-data" method="POST" class="left" action="../adminCode/add_img.php" >

                        <label >image Name</label><br>
                   
                        <input Name='image_name' type="text" class="name" placeholder="Name"><br>
                        <label >Upload Photo:</label><br>
 
                      <input type="file" name="file" >
     
                                    <input type="submit" class="btn btn-primary" name="add_image">
                        </form>

</div>


<!-- gallery -->

<div  class=" jumbotron jumbotron-fluid outerdiv center">
<h3> <span class="label label-default">Gallery List</span>  </h3>
  <table  class="table table-bordered center poit" id="Gallery">
  <thead>
  <tr>
<th  scope="col" class="idHeader">Gallery ID</th>
<th scope="col">Gallery Name</th>
<th scope="col" style="width: 30px;">View</th>
<th scope="col" style="width: 30px;">Delete</th>




  </tr>
  </thead>
  <?php
				$sql_query1 = "SELECT * FROM img";
				
				$result1 = $conn -> query($sql_query1);
				
				while($row1 = $result1 -> fetch_assoc()){
					$img_id =  $row1['img_id'];
			?>

    <tr>
<td  scope="row"><?php echo $row1['img_id'];?></td>
<td  scope="row"><?php echo $row1['img_name'];?></td>



<td class="center"> 	<a href="=<?php echo $display_id; ?>"> <iconify-icon icon="carbon:view-filled"style='font-size:25px;color:black'></iconify-icon></a></td>
<td class="center"> 	<a href="../adminCode/delete_image.php?img_id=<?php echo $img_id; ?>"> <iconify-icon icon="material-symbols:delete-forever"style='font-size:25px;color:red'></iconify-icon></a></td>
<?php		
				}
			?>
    </tr>


</table>


</div>




  </div>
        </section>




    </body>
    </html>







    <script>  
 $(document).ready(function(){  
   
      $('#Gallery').DataTable(); 

    
 });  
 </script>  
