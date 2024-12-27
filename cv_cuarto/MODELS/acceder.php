<?php
include 'conexion.php';
$conn = new Conexion();
$con = $conn->conectar();
$SqlSelect = "SELECT * FROM estudiantes";
$respuesta = $con->query($SqlSelect);
$resultado = array();
if ($respuesta -> num_rows>0){
    while($fila = $respuesta -> fetch_array()){
        array_push($resultado,$fila);
    }
}else{
    $resultado = "No hay estudiantes";
}
echo json_encode($resultado);
?>