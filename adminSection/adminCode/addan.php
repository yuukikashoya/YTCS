<?php

include"../../database/connecting_to_DB.php";




if (isset($_POST['submit'])){

 $announcement = $_POST['announcement'];


            $query = "INSERT INTO announcement VALUES(' ','$announcement')";

            if($conn->query($query) === TRUE) {

                header('Location: ../adminWebsite/an.php?message=Inserterd Successfully');
    }else{

        // echo"Error!!!";
        echo '<script>window.alert("ERROR!")</script>';
    }


    } else {
        echo "Sorry, there was an error uploading your file.";

    }
    




?>