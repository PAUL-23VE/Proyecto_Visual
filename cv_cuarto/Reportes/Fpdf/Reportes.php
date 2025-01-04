<?php
require_once('../fpdf186/fpdf.php');
require_once('../../MODELS/conexion.php');

$sql = "SELECT * FROM estudiantes";
$resultado = Conexion::conectar()->query($sql);


$pdf = new FPDF();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 16);


$pdf->Cell(0, 10, "Listado Estudiantes 4to", 0, 1, 'C');

$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 11);

// Cabecera de la tabla
$pdf->Cell(25, 10, "Cedula", 1, 0, 'C');
$pdf->Cell(30, 10, "Nombre", 1, 0, 'C');
$pdf->Cell(40, 10, "Apellido", 1, 0, 'C');
$pdf->Cell(50, 10, "Direccion", 1, 0, 'C');
$pdf->Cell(46, 10, "Telefono", 1, 1, 'C');

$pdf->SetFont('Arial', '', 11);

while ($fila = $resultado->fetch_object()) {
    $cedula = $fila->estCedula;
    $nombre = $fila->estNombre;
    $apellido = $fila->estApellido;
    $direccion = $fila->estDireccion;
    $telefono = $fila->estTelefono;

    $pdf->Cell(25, 10, $cedula, 1);
    $pdf->Cell(30, 10, $nombre, 1);
    $pdf->Cell(40, 10, $apellido, 1);
    $pdf->Cell(50, 10, $direccion, 1);
    $pdf->Cell(46, 10, $telefono, 1);
    $pdf->Ln();
}

$pdf->Output();
?>
