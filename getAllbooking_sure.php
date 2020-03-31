<?php

require_once './functions/database_functions.php';
include('./fpdf182/fpdf.php');

$result = getAllbooking_sure();

$resultset =array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultset[0] =$row;
    }
  }
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(20);
$str = iconv('UTF-8', 'windows-1252',utf8_decode("سيبسي"));
$pdf->Cell(95,12,$str,1);
// foreach($result1 as $heading) {
// 	foreach($heading as $column_heading)
// 		$pdf->Cell(95,12,$column_heading,1);
// }
foreach($resultset as $row) {
	// $pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(95,12,$column,1);
}


$pdf->Output();
?>