<?php
include 'conexion.php';
$conn = new Conexion();
$con = $conn->conectar();
$CEDULA = $_POST['CED'];
$sql = "DELETE FROM estudiantes where EST_CED='$CEDULA'";
$respuesta = $con->query($sql);
if ($respuesta) {
    echo json_encode(["success" => true, "message" => "Estudiante eliminado correctamente."]);
} else {
    throw new Exception("Error al eliminar el estudiante.");
}
?>
