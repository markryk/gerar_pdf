<?php
	include $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Hello Fpdf!');
	$pdf->Output();
?>