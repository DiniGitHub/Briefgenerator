<?php

require __DIR__. '/fpdf/fpdf.php';

//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial', 'B', 16);
//$pdf->Cell(40,10,'Hallo Welt');

class PDF extends FPDF {

    public function Header(){
        $this->Image('logo1.png',0,0,220);
        //$this->SetFont('Arial', 'U', 15);
        // $this->Cell(100);
        // $this->Cell(90,10, 'Diana Zawadzki Briefgenerator',1,0,'C');
        // $this->Ln(20);
    }
    public function Footer(){

        $this->SetY(-15);
        $this->SetFont('Times','I', 8);
        $this->Cell(0, 10, 'Seite ' . $this->PageNo() .' von {nb}', 0, 0, 'C');
    }


}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetY(30);
for ($i=1;$i <=24;$i++){
    $pdf->SetFont('Times','I', 15);
    $pdf->Cell(0, 10, 'Ausgabe der Zeile '. $i, 0, 1);
}
$pdf->Output();

?>