<?php
require('fpdf182/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'pms-db');

class PDF extends FPDF{
    function Header(){
       $this->SetFont('Arial','',16);
    

         //dummy cell to put logo
       //$this->Cell(12,0,'',0,0);
       //is uquivalant to;
       $this->Cell(12);

       //put logo
       $this->Image('logo1.png',0,10,350);

      $this->Cell(100,50,'',0,1); 
      $this->Cell(-100,20,'Supplier Details.');
      $this->Cell(100,8,'',0,1); 
      $this->Cell(50,8,'',0,1);  

      //dummy cell to give line spacing
      //$this->Cell(0,5,'',0,1);
      //is equilant to
      $this->Ln(5); 

      $this->SetFont('Arial','B',11);
  
      $this->SetFillColor(153, 194, 255);
      $this->SetDrawColor(50,50,100);
      $this->Cell(25,10,'Company_Id',1,0,'',true);
      $this->Cell(35,10,'Company_Name',1,0,'',true);
      $this->Cell(23,10,'Address',1,0,'',true);
      $this->Cell(22,10,'Tel No',1,0,'',true);
      $this->Cell(45,10,'Email',1,0,'',true);
      $this->Cell(20,10,'Category',1,0,'',true);
      $this->Cell(25,10,'Reg_Date',1,1,'',true);
    
    }

        function Footer(){
            //add tables bottom line
            $this->Cell(190,0,'','T',1,'',true);
        
        //go to 1.5 cm from bottom
        $this->SetY(-15);
        $this->SetFont('Arial','',8);

        //width
         $this->Cell(0,10,'Page '.$this->PageNo(). " / {pages}",0,0,'C');

       }


}


$pdf = new PDF('P','mm','A4');

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',10);
$pdf->SetDrawColor(50,50,100);

$query=mysqli_query($con,"select * from supplier");
while($data=mysqli_fetch_array($query)){
    $pdf->Cell(25,10,$data['company_id'],'LR',0);
    $pdf->Cell(35,10,$data['company_name'],'LR',0);
    $pdf->Cell(23,10,$data['address'],'LR',0);
    $pdf->Cell(22,10,$data['tel_no'],'LR',0);
    $pdf->Cell(45,10,$data['email'],'LR',0);
    $pdf->Cell(20,10,$data['category'],'LR',0);
    $pdf->Cell(25,10,$data['reg_date'],'LR',1);
    
}


$pdf->Output();

?>
