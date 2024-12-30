<?php
session_start(); // Iniciar la sesión para almacenar datos de autenticación

// Verificar si los datos POST están presentes
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    include 'conexion.php'; // Incluye tu archivo de conexión a la base de datos
    $conn = new conexion();
    $con = $conn->conectar();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Usar sentencias preparadas para evitar inyección SQL
    $sqlIngresar = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    //echo json_encode($sqlIngresar);
    $stmt = $con->prepare($sqlIngresar);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        // Verificar si la contraseña coincide
        if ($password=== $row['password']) {
            $_SESSION['usuario'] = $usuario;
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["error" => "Contraseña incorrecta"]);
        }
    } else {
        echo json_encode(["error" => "Usuario no encontrado"]);
    }

    $stmt->close();
    $con->close();
} else {
    echo json_encode(["error" => "Datos incompletos"]);
}
?>
