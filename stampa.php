<?php
require_once('DB/Connections/conn.php'); 
require('fpdf.php');
require_once('qrcode/qrcode.class.php');


mysql_select_db($database_conn, $conn);

$idevento = $_POST['idevento'];
$query_rs_eventi = 'SELECT * FROM eventi WHERE id= ' .$idevento;


$rs_eventi = mysql_query($query_rs_eventi, $conn) or die(mysql_error());
$row_rs_eventi = mysql_fetch_assoc($rs_eventi);
$totalRows_rs_eventi = mysql_num_rows($rs_eventi);

 do { 
$immagine = 'DB/sfondi/'.$row_rs_eventi['immagine'] ;
} while ($row_rs_eventi = mysql_fetch_assoc($rs_eventi)); 


// VARIABILI
$codice = $_POST['idmedico'];
$notestampate = $_POST['notestampate'];
$nome = $_POST['nome'] ;

	
$pdf = new FPDF();
$pdf->AddPage();
$qrcode = new QRcode($codice, 'H'); // error level : L, M, Q, H
$background[0]= 255; 
$background[1]= 255;
$background[2]= 255;
$color[0] = 0;
$color[1] = 0;
$color[2] = 0;

$pdf->SetFont('Arial','B',16);
//$pdf->Image('sfondi/logo.jpg',0,0,0,0);


$pdf->Image($immagine,0,0,0,0);

$pdf->Cell(0,10,$nome,0,1);
$pdf->Cell(0,10,$notestampate);
$qrcode->displayFPDF($pdf, 100, 100, 50,$background, $color);
$pdf->Output();


?>
