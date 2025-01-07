<?php
include 'conexion.php';
$conn = new Conexion();
$con = $conn->conectar();
$cedula = $_GET['EST_CED'];
$nombre = $_POST['EST_NOM'];
$apellido = $_POST['EST_APE'];
$telefono = $_POST['EST_TEL'];
$direccion = $_POST['EST_DIR'];
$sql = "UPDATE estudiantes SET EST_NOM='$nombre', EST_APE='$apellido', EST_TEL='$telefono',EST_DIR='$direccion' WHERE EST_CED='$cedula'";
if ($con->query($sql) === TRUE) {
    echo json_encode("Se actualizo correctamente");
} else {
    echo json_encode("Error no se actualizo");
}




?>