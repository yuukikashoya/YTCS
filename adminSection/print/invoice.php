<?php
 require('fpdf/fpdf.php');
 
 //create an FPDF object
 $pdf=new FPDF("P","mm","A4"); 
 
 //or custom page size
 $pdf=new FPDF("P","mm",array(210,210)); 
 
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
 $pdf->Cell(34 ,5,'[dd/mm/yyyy]',0,1);//end of line
 
 $pdf->Cell(130 ,5,'Phone 09663955462 / 09319919517',0,0);

 $pdf->Cell(130 ,5,'Customer Copy',0,0);
 $pdf->Cell(25 ,5,'Invoice #',0,0);
 $pdf->Cell(34 ,5,'[1234567]',0,1);//end of line
 

 
 //make a dummy empty cell as a vertical spacer
 $pdf->Cell(189 ,10,'',0,1);//end of line
 
 //billing address
 $pdf->Cell(100 ,5,'Bill to',0,1);//end of line
 
 //add dummy cell at beginning of each line for indentation
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,'[Name]',0,1);
 

 
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,'[Address]',0,1);
 
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,'[Phone]',0,1);
 
 //make a dummy empty cell as a vertical spacer
 $pdf->Cell(189 ,10,'',0,1);//end of line
 
 //invoice contents
 $pdf->SetFont('Arial','B',12);
 
 $pdf->Cell(130 ,5,'Description',1,0);
 $pdf->Cell(25 ,5,'Types',1,0);
 $pdf->Cell(34 ,5,'Amount',1,1);//end of line
 
 $pdf->SetFont('Arial','',12);
 
 //Numbers are right-aligned so we give 'R' after new line parameter
 
 $pdf->Cell(130 ,5,'Bundle',1,0);
 $pdf->Cell(25 ,5,'-',1,0);
 $pdf->Cell(34 ,5,'3,250',1,1,'R');//end of line
 
 $pdf->Cell(130 ,5,'Photograpy',1,0);
 $pdf->Cell(25 ,5,'-',1,0);
 $pdf->Cell(34 ,5,'1,200',1,1,'R');//end of line
 

 
 //summary

 
 
 

 
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(25 ,5,'Total Due',0,0);
 $pdf->Cell(10 ,5,'Php',1,0);
 $pdf->Cell(24 ,5,'4,450',1,1,'R');//end of line

 
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);

 $pdf->Ln(10);






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
 $pdf->Cell(34 ,5,'[dd/mm/yyyy]',0,1);//end of line
 
 $pdf->Cell(130 ,5,'Phone 09663955462 / 09319919517',0,0);
 $pdf->Cell(130 ,5,'Biller Copy',0,0);
 $pdf->Cell(25 ,5,'Invoice #',0,0);
 $pdf->Cell(34 ,5,'[1234567]',0,1);//end of line
 

 
 //make a dummy empty cell as a vertical spacer
 $pdf->Cell(189 ,10,'',0,1);//end of line
 
 //billing address
 $pdf->Cell(100 ,5,'Bill to',0,1);//end of line
 
 //add dummy cell at beginning of each line for indentation
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,'[Name]',0,1);
 

 
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,'[Address]',0,1);
 
 $pdf->Cell(10 ,5,'',0,0);
 $pdf->Cell(90 ,5,'[Phone]',0,1);
 
 //make a dummy empty cell as a vertical spacer
 $pdf->Cell(189 ,10,'',0,1);//end of line
 
 //invoice contents
 $pdf->SetFont('Arial','B',12);
 
 $pdf->Cell(130 ,5,'Description',1,0);
 $pdf->Cell(25 ,5,'Types',1,0);
 $pdf->Cell(34 ,5,'Amount',1,1);//end of line
 
 $pdf->SetFont('Arial','',12);
 
 //Numbers are right-aligned so we give 'R' after new line parameter
 
 $pdf->Cell(130 ,5,'Bundle',1,0);
 $pdf->Cell(25 ,5,'-',1,0);
 $pdf->Cell(34 ,5,'3,250',1,1,'R');//end of line
 
 $pdf->Cell(130 ,5,'Photograpy',1,0);
 $pdf->Cell(25 ,5,'-',1,0);
 $pdf->Cell(34 ,5,'1,200',1,1,'R');//end of line
 

 
 //summary

 
 
 

 
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(25 ,5,'Total Due',0,0);
 $pdf->Cell(10 ,5,'Php',1,0);
 $pdf->Cell(24 ,5,'4,450',1,1,'R');//end of line

 
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);
 $pdf->Cell(130 ,5,'',0,0);


 // Close document and sent to the browser
 $pdf->Output();
 
?>