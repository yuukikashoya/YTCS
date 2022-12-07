<?php

 require('fpdf/fpdf.php');
include"../../database/connecting_to_DB.php";


 $service_id  = $_GET['service_id'];
 $sql_query = "SELECT * FROM service WHERE service_id ='$service_id ' ";
 
 $result = $conn -> query($sql_query);
 
 while($row = $result -> fetch_assoc()){
     $service_id  = $row['service_id'];
     $client_name  = $row['client_name'];
     $email  = $row['email'];
     $contact  = $row['contact'];
     $bundle  = $row['bundle'];
     $pax  = $row['pax'];
     $photo  = $row['photo'];
     $time_start  = $row['time_start'];
     $time_ends  = $row['time_ends'];
     $date  = $row['date'];
     $today =  date("Y-m-d");
     $invitation = $row['invitation'];
     $sets = $row['sets'];

 }

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



 //create an FPDF object
 $pdf=new FPDF("L","mm","A5"); 
 
 //or custom page size
  $pdf=new FPDF("L","mm",array(210,125)); 
 
 //Add Blank Page
 $pdf->AddPage();  

 //Set Font,Style,Size 

 
 $pdf->SetFont("Arial","B",15);  
 
 //Prints a cell with borders , alignment and fill background .
 $pdf->Cell(130 ,5,'Yani & TinTin Catering Service',0,0);
 $pdf->Cell(59 ,5,'INVOICE',0,1);//end of line
 
 //set font to arial, regular, 12pt
 $pdf->SetFont('Arial','',12);
 
 $pdf->Cell(130 ,5,'Zone 7. Tinago St.',0,0);
 $pdf->Cell(59 ,5,'',0,1);//end of line
 
 $pdf->Cell(130 ,5,'Bigaa, Legazpi city. Albay
 Postal code: 4501',0,0);




 $pdf->Cell(25 ,5,'Date',0,0);
 $pdf->Cell(34 ,5,$today,0,1);//end of line
 
 $pdf->Cell(130 ,5,'Phone 09663955462 / 09319919517',0,0);


 $pdf->Cell(25 ,5,'Invoice #',0,0);
 $pdf->Cell(34 ,5,$service_id,0,1);//end of line
 


 //make a dummy empty cell as a vertical spacer
 $pdf->Cell(189 ,10,'',0,1);//end of line
 
 //billing address
 $pdf->Cell(100 ,5,'Bill to',0,1);//end of line

 //add dummy cell at beginning of each line for indentation
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,$client_name,0,1);
 

 
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,$email,0,1);
 
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,$contact,0,1);
 
 //make a dummy empty cell as a vertical spacer
 $pdf->Cell(189 ,10,'',0,1);//end of line
 
 //invoice contents
 $pdf->SetFont('Arial','B',12);
 
 $pdf->Cell(80 ,5,'',1,0);
 $pdf->Cell(60 ,5,'Description',1,0);
 $pdf->Cell(49 ,5,'Amount',1,1);//end of line
 
 $pdf->SetFont('Arial','',12);
 
 //Numbers are right-aligned so we give 'R' after new line parameter

 $pdf->Cell(80 ,5,'Bundle',1,0);
 $pdf->Cell(60 ,5, $bundle."  pax of ".$pax." ".$sets,1,0);
 $pdf->Cell(49 ,5,$per,1,1,'R');//end of line
 
 $pdf->Cell(80 ,5,'Photograpy',1,0);
 $pdf->Cell(60 ,5,$photo,1,0);
 $pdf->Cell(49 ,5,'1,200',1,1,'R');//end of line
 $pdf->Cell(80 ,5,'invitation',1,0);
 $pdf->Cell(60 ,5, $invitation,1,0);
 $pdf->Cell(49 ,5,'1,200',1,1,'R');//end of line


 //summary

 
 
 

 
 $pdf->Cell(110 ,5,'',0,0);
 $pdf->Cell(30 ,5,'Total Due',0,0);
 $pdf->Cell(10 ,5,'Php',1,0);
 $pdf->Cell(39 ,5,'4,450',1,1,'R');//end of line

 
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);

 $pdf->Ln(10);



//biller copy

 // Close document and sent to the browser
 $pdf->Output();
 
?>