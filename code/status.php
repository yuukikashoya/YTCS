<?php
include"../database/connecting_to_DB.php";


session_start();
if(!isset($_SESSION['login'])){ //if login in session is not set
    header('Location: ../website/login.php?message=Log in');
    echo 'hello';
  }




?>