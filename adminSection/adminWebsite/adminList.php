<?php include"../../database/connecting_to_DB.php";
session_start();
if(!isset($_SESSION['adminLogin'])){ //if login in session is not set
  header('Location: ../../website/login.php?message=Log in');
}


?>

<html>
    <head>
    <title>Admin</title>
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
          <a href=""class="active">
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
          <a href="../adminCode/adminLogout.php">
            <i class='	bx bx-log-out' ></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
        </li>
        <div class="logo-details">
        <i class='	bx bx-select-multiple' ></i>
    
      <span class="logo_name">Options</span>
    </div>
    <li>
          <a onclick="myFunction()" href="#top">
            <i class='	bx bx-lock' ></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>
        <?php
$userRank = $_SESSION["rank"];
if($userRank >= 1 ){
echo '   <li>
<a href="#add">
  <i class="	bx bx-plus" ></i>
  <span class="links_name">Add Admin</span>
</a>
</li>';}
?>
     
        <li>
          <a href="#table">
            <i class='	bx bx-table' ></i>
            <span class="links_name">Admin Table</span>
          </a>
        </li>
        <?php
$userRank = $_SESSION["rank"];
if($userRank == 2 ){
echo '   <li>
<a href="#rank">
  <i class="	bx bx-edit" ></i>
  <span class="links_name">Change Rank</span>
</a>
</li>';}
?>
      
      
      </ul>
  </div>


<section class="home-section ">
    <nav>

      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
         <span class="dashboard">Admin:</span> <?php echo $_SESSION["adminName"];?> &nbsp; <span class="dot"></span>
   
    </nav>



<div class="container  center  home-content add" >



<div id="change" class="jumbotron jumbotron-fluid  outerdiv" style="display:none ;">

                    <h3> <span class="label label-default">Change Passsword</span>  </h3>
                    <form method="POST" class="left" action="../adminCode/adminChangePassword.php">
                    <label class="text-white">Old Password</label><br>
                          <input Name ='old_password' type="password" class="name" placeholder="Old"><br>
                          <label class="-">New Password</label><br>
                          <input Name ='new_password' type="password" class="name" placeholder="New"><br>
                          <label class="">Retype New Password</label><br>
                          <input Name ='retype' type="password" class="name" placeholder="Retype" ><br>
                          
                         
                            
                          <input type="submit" class="btn btn-primary" name="change">
                    </form>
                        </div>
                        


<?php 

if($userRank >= 1){
  echo '<div  id="add" class="jumbotron jumbotron-fluid  outerdiv addTop">
  <br><br>
                    
                    <h3> <span class="label label-default">Add Admin</span>  </h3>
                    <form method="POST" class="left" action="../adminCode/addAdmin.php">
                     <label class="">User Name</label><br>
                          <input Name ="username" type="text" class="name" placeholder="Name"><br>
                          <label class="">Name</label><br>
                          <input Name ="name" type="text" class="name" placeholder="Name"><br>
                          
                          <input hidden Name ="password" type="password" class="name" readonly value="1"><br>
                            
                          <div class="alert alert-danger alert-dismissible">
                            
                           <p> <strong> Note!! password is always set to 1 </strong> </p>
                        </div>
                                
                          
                              
                                
                                <input type="submit" class="btn btn-primary" name="submit">
                    </form>
                </div>        
       ';
}
?>

  

                <script>
function myFunction() {
  var x = document.getElementById("change");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    // x.style.display = "none";
  
  }
}
</script>


<div  class="jumbotron jumbotron-fluid outerdiv">
<h3> <span class="label label-default">Admin Table</span>  </h3>
  <table id="table" class="table table-bordered ">
  <thead>
  <tr>
  <th  >Admin ID</th>
<th >Name</th>
<th >Username</th>
<th>Delete</Address></th>

  </tr>
  </thead>
  <?php
			$sql_query = "SELECT * FROM admin";
				
      $result = $conn -> query($sql_query);
      
      while($row = $result -> fetch_assoc()){
        $admin_id = $row['admin_id'];
			?>

    <tr>
    <td ><?php echo $row['admin_id'];?></td>
<td><?php echo $row['admin_name'];?></td>
<td><?php echo $row['admin_username'];?></td>
<td class="center"> 	

<a href="../adminCode/delete_admin.php?admin_id=<?php echo $admin_id; ?>"><i class="fas fa-user-alt-slash" style="font-size:25px;color:red"></i></a></td> 

<?php	
				}
			?>
    </tr>


</table>



</div>
<!-- note only root admin can access this feuture -->
<?php
 if($userRank == 2){
   echo '
  <div  id="rank" class="jumbotron jumbotron-fluid  outerdiv addTop">

                    
                    <h3> <span class="label label-default">Change Rank</span>  </h3>
                    <form method="POST" class="left" action="../adminCode/rankUpdate.php">
                     <label class="">User ID</label><br>
                          <input Name ="admin_id" type="number" class="name" placeholder="Name"><br>

                          <input type="radio" id="rank" name="rank" value="0">
                          <label for="rank"class="">Admin</label><br>
                          <input type="radio" id="rank1" name="rank" value="1">
                          <label for="rank1"class="">Super Admin</label><br>  <br>
       
                                <input type="submit" class="btn btn-primary" name="update" value="Update">
                    </form>
                </div>        
     ';
 }
?>


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

    <script>  
 $(document).ready(function(){  


      $('#table').DataTable(); 
    
 });  
 </script>  
