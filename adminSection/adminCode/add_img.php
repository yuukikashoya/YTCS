<?php

include"../../database/connecting_to_DB.php";

$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["file"] ["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$image_name = $_POST["image_name"];



if (isset($_POST['add_image'])){

    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false){
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }else{
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

//exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

//size
// if ($_FILES["fileToUpload"] ["size"] > 5000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

//formats

if ($imageFileType !="jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ){
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

    // everthing ok

}else{
    $imagename =$_FILES['file']['name'];
    $imageext = explode('.', $imagename);
    $imagetmpname =$_FILES['file']['tmp_name'];
    $imageactualext = strtolower(end($imageext));
    $imagenamenew = uniqid('', true).".".$imageactualext;
    $imagedestination = '../images/'.$imagenamenew;
   

    if ($uploadOk == 1) {

        move_uploaded_file($imagetmpname, $imagedestination);



            $query = "INSERT INTO img VALUES(' ','$image_name','$imagenamenew')";

            if($conn->query($query) === TRUE) {

                header('Location: ../adminWebsite/adminGallery.php?message=Inserterd Successfully');
    }else{

        // echo"Error!!!";
        echo '<script>window.alert("ERROR!")</script>';
    }


    } else {
        echo "Sorry, there was an error uploading your file.";

    }
    }




?>