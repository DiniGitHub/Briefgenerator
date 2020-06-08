<?php

require __DIR__ . "/fpdf/fpdf.php";



class PDF extends FPDF {
	public function Footer(){
		$this->SetY(-30);
		$this->SetFont('Times', '', 8);
    $this->Cell(0, 5, 'Seite ' . $this->PageNo() . ' von {nb}', 0, 0, 'R');
    $this->Ln();

    $this->Cell(0,5,utf8_decode($_POST['Fußzeile']));

  }
  public function Header(){
		$this->SetXY(0,0);
		$this->SetFont('Times', '', 8);
    $this->Image('logo2.png',0,0,210,40);
    $this->Ln(40);
	}
}

$pdf = new PDF('P', 'mm', 'A4');
$pdf->SetAutoPageBreak(true, 30);
$pdf->AliasNbPages();
$pdf->SetFont('Times', '', 12);
$pdf->SetMargins(25, 45, 20);

$pdf->AddPage();
$Name1 = $_POST['Anrede1'].' '.$_POST['Vorname1'].' '.$_POST['Nachname1'];
$Name2 = $_POST['Anrede2'].' '.$_POST['Vorname2'].' '.$_POST['Nachname2'];
//Adressfeld
$pdf->SetXY(25, 45);
$pdf->SetFont('Times', '', 12);
if (isset($_POST['Firma1']) && $_POST['Firma1']!=''){
  
  $pdf->MultiCell(0, 10, utf8_decode($_POST['Firma1']),0,1);
  $pdf->MultiCell(0, 0, utf8_decode($Name1),0,1);
  $pdf->MultiCell(0, 10, utf8_decode($_POST['StraßeHausnummer1']),0,1);
  $pdf->MultiCell(0, 0, utf8_decode($_POST['PLZOrt1']),0,1);
}
else {

  
  $pdf->MultiCell(0, 0, utf8_decode($Name1),0,1);
  $pdf->MultiCell(0, 10, utf8_decode($_POST['StraßeHausnummer1']),0,1);
  $pdf->MultiCell(0, 0, utf8_decode($_POST['PLZOrt1']),0,1);
  
}
//Absender
$pdf->SetXY(110, 45);
$pdf->SetFont('Times', '', 12);
if (isset($_POST['Firma2']) && $_POST['Firma2']!=''){
  
  $pdf->MultiCell(0, 10, utf8_decode($_POST['Firma2']),0,'R');
  $pdf->MultiCell(0, 0, utf8_decode($Name2),0,'R');
  $pdf->MultiCell(0, 10, utf8_decode($_POST['StraßeHausnummer2']),0,'R');
  $pdf->MultiCell(0, 0, utf8_decode($_POST['PLZOrt2']),0,'R');
  $pdf->MultiCell(0, 10, utf8_decode($_POST['Telefonnummer']),0,'R');
  $pdf->MultiCell(0, 0, utf8_decode($_POST['Email']),0,'R');
}
else {

  
  $pdf->MultiCell(0, 0, utf8_decode($Name2),0,'R');
  $pdf->MultiCell(0, 10, utf8_decode($_POST['StraßeHausnummer2']),0,'R');
  $pdf->MultiCell(0, 0, utf8_decode($_POST['PLZOrt2']),0,'R');
  $pdf->MultiCell(0, 10, utf8_decode($_POST['Telefonnummer']),0,'R');
  $pdf->MultiCell(0, 0, utf8_decode($_POST['Email']),0,'R');

  
}
//Datum
$pdf->SetXY(110, 100);
$pdf->MultiCell(0, 10, utf8_decode($_POST['Datum']),0,'R');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times', 'B', 14);
$pdf->MultiCell(0, 10, utf8_decode($_POST['Betreff']),0,'L');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times', '', 12);
$pdf->MultiCell(0, 10, utf8_decode($_POST['Briefinhalt']),0,'L');
$pdf->Output();

?>