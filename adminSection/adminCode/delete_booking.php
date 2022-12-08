<?php

include"../../database/connecting_to_DB.php";
if(isset($_GET['service_id'])){
	
	$service_id  = $_GET['service_id'];
	$sql_query = "SELECT * FROM service WHERE service_id ='$service_id ' ";
	
	$result = $conn -> query($sql_query);
	
	while($row = $result -> fetch_assoc()){
		$service_id  = $row['service_id'];
		$client_name  = $row['client_name'];
		$bundle  = $row['bundle'];
		$pax  = $row['pax'];
		$photo  = $row['photo'];
		$date  = $row['date'];
		$today =  date("Y-m-d");
		$invitation = $row['invitation'];
		$sets = $row['sets'];
		$username = $row['client_username'];


   
	}
// setting up dathe price
	$wedding = "Weddings";
$birthday = "Birthday";
$org = "Organizational";

if($wedding == $bundle){
    if("Set A" == $sets){
        $per = 500;
    }
    else if("Set B" == $sets){
        $per = 600;
    }
}
else if($birthday == $bundle){
    if("Set A" == $sets){
        $per = 350;
    }
    else if("Set B" == $sets){
        $per = 350;
    }
    else if("Set C" == $sets){
        $per = 350;
    }
}
else if($org == $bundle){
    if("Set A" == $sets){
        $per = 450;
    }
    else if("Set B" == $sets){
        $per = 350;
    }
    else if("Set C" == $sets){
        $per = 450;
    }
    else if("Set D" == $sets){
        $per = 450;
    }
}

if("yes" == $photo){
    $pg = 2500;
}
else if("no" == $photo){
    $pg = 0;
}
if("yes" == $invitation){
    $in = 25;
}
else if("no" == $invitation){
    $in = 0;
}


// math
if(180 <  $pax){
    $sad = $pax - 180;
    $asd = $sad * 250;
    $dsa = $per * $pax; 
    $tper = $dsa + $asd;
}
else{
   $tper = $per * $pax; 
}

$total = $tper + $pg + $tin;


$query_customer = " INSERT INTO ref VALUES ('','$service_id','$client_name','$username','$date','$total','$bundle','$today')";

if ($conn->query($query_customer) === TRUE){



	$query = "DELETE FROM service WHERE service_id = '$service_id' ";

	if($conn->query($query) === TRUE){
		



        header('Location: ../adminWebsite/display.php?message=delete Successfully');
		
	}else{
		
		// echo"Error!!!";
		echo '<script>window.alert("ERROR!")</script>';
	}

}   else{
echo '<script>window.alert("error 01")</script>';
echo '<script>window.history.go(-1);</script>';


    }






	
}
?>