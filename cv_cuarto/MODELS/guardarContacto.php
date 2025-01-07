<?php
require_once "conexion.php"; 
require_once '../Controls/controller.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $controller = new mvcController();
        $controller->guardarContacto($nombre, $email, $mensaje);
    } else {
        echo "Por favor, completa todos los campos.";
    }
} else {
    echo "Método no permitido.";
}
?>
