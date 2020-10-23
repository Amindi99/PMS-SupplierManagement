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
      $this->Cell(-100,20,'Previous purchased Details.');
      $this->Cell(100,8,'',0,1); 
      $this->Cell(50,8,'',0,1);  

      //dummy cell to give line spacing
      //$this->Cell(0,5,'',0,1);
      //is equilant to
      $this->Ln(5); 

      $this->SetFont('Arial','B',11);
  
      $this->SetFillColor(153, 194, 255);
      $this->SetDrawColor(50,50,100);
      $this->Cell(30,10,'Purchased_Id',1,0,'',true);
      $this->Cell(30,10,'Item_Id',1,0,'',true);
      $this->Cell(30,10,'Quantity',1,0,'',true);
      $this->Cell(30,10,'Company_Id',1,0,'',true);
      $this->Cell(30,10,'Ordered date',1,0,'',true);
      $this->Cell(40,10,'Received date',1,1,'',true);
    
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

$pdf->SetFont('Arial','',12);
$pdf->SetDrawColor(50,50,100);

$query=mysqli_query($con,"select * from add_purchase");
while($data=mysqli_fetch_array($query)){
    $pdf->Cell(30,10,$data['purchased_id'],'LR',0);
    $pdf->Cell(30,10,$data['item_id'],'LR',0);
    $pdf->Cell(30,10,$data['quantity'],'LR',0);
    $pdf->Cell(30,10,$data['company_id'],'LR',0);
    $pdf->Cell(30,10,$data['ordered_date'],'LR',0);
    $pdf->Cell(40,10,$data['received_date'],'LR',1);
    
}


$pdf->Output();

?>
