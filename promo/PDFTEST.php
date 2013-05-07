<?php
require("FPDF/fpdf.php");

$codigo = $_GET['code'];

$pdf = new FPDF( );

$pdf->AddPage();

$pdf->SetFont('Arial','B',25);

$pdf->image('./FPDF/promo_back.jpg');

$pdf->SetXY(85,101);

$pdf->Cell(0,5,$codigo,0,1);

$pdf->Output();
?>