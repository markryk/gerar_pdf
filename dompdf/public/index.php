<?php
	include $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

	use Dompdf\Dompdf;

	$pdf = new Dompdf();

	$pdf->loadHtml('<h1>Hello DomPDF!</h1>');
	$pdf->setPaper('A4');
	$pdf->render();
	//ob_start();
	$pdf->stream('clientes.pdf', [
		'Attachment' => false,
	]);
?>