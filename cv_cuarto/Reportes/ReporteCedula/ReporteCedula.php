<?php
require_once('../fpdf186/fpdf.php');
require_once('../../MODELS/conexion.php');


$cedula = $_GET['EST_CED'];
$sql = "SELECT  * FROM estudiantes WHERE EST_CED='$cedula'";
$resultado = Conexion::conectar()->query($sql);

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont("Arial", "B", 16);

$pdf->Cell(0, 10, "Datos del Estudiante", 0, 1, 'C');

$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 15);

$pdf->Cell(25, 10, "Cedula", 1, 0, 'C');
$pdf->Cell(30, 10, "Nombre", 1, 0, 'C');
$pdf->Cell(40, 10, "Apellido", 1, 0, 'C');
$pdf->Cell(50, 10, "Direccion", 1, 0, 'C');
$pdf->Cell(46, 10, "Telefono", 1, 1, 'C');

$pdf->SetFont('Arial', '', 11);
while ($row = $resultado->fetch_object()) {
    $cedula = $row->EST_CED;
    $nombre = $row->EST_NOM;
    $apellido = $row->EST_APE;
    $direccion = $row->EST_DIR;
    $telefono = $row->EST_TEL;
    $pdf->Cell(25, 10, "$cedula", 1);
    $pdf->Cell(30, 10, "$nombre", 1);
    $pdf->Cell(40, 10, "$apellido", 1);
    $pdf->Cell(50, 10, "$direccion", 1);
    $pdf->Cell(46, 10, "$telefono", 1);
    $pdf->Ln();
}
$pdf->Output();