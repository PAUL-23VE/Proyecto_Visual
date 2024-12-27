<?php
include 'conexion.php';
$conn = new Conexion();
$con = $conn->conectar();
$cedula = $_POST['EST_CED'];
$nombre = $_POST['EST_NOM'];
$apellido = $_POST['EST_APE'];
$telefono = $_POST['EST_TEL'];
$direccion = $_POST['EST_DIR'];

$SqlInsert = "INSERT INTO estudiantes VALUES ('$cedula','$nombre','$apellido','$telefono','$direccion')";

$respuesta = $con->query($SqlInsert);
if ($respuesta) {
    echo json_encode(["success" => true, "message" => "Estudiante guardado correctamente."]);
} else {
    throw new Exception("Error al guardar el estudiante.");
}
?>