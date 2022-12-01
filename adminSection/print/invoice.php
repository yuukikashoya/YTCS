<?php
 require('fpdf/fpdf.php');
 
 //create an FPDF object
 $pdf=new FPDF("P","mm","A4"); 
 
 //or custom page size
 //$pdf=new FPDF("P","mm",array(150,250)); 
 
 //Add Blank Page
 $pdf->AddPage();  

 //Set Font,Style,Size 
 $pdf->SetFont("Arial","B",15);  
 
 //Prints a cell with borders , alignment and fill background .
 $pdf->Cell(0,0,"I love you honey",0,0,"C",false);
 
 // Close document and sent to the browser
 $pdf->Output();
 
?>