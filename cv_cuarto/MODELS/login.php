<?php
session_start(); // Iniciar sesión para almacenar el token
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// Verificar si los datos POST están presentes
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    include 'conexion.php'; // Archivo para la conexión a la base de datos
    require __DIR__ . '/../vendor/autoload.php'; // Cargar JWT con Composer

    $conn = new conexion();
    $con = $conn->conectar();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta SQL segura con sentencias preparadas
    $sqlIngresar = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $con->prepare($sqlIngresar);
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();

        // Verificar la contraseña
        if ($password === $row['password']) {
            // Generar un token JWT
            $key = "david123"; // Cambia esta clave por una más segura
            $payload = [
                "iss" => "http://localhost/Proyecto_Visual", // Emisor
                "aud" => "http://localhost/Proyecto_Visual", // Receptor
                "iat" => time(), // Tiempo actual
                "exp" => time() + 120, 
                "data" => [
                    "usuario" => $usuario
                ]
            ];

            $token = JWT::encode($payload, $key, 'HS256');

            // Guardar el token en la sesión
            $_SESSION['token'] = $token;

            echo json_encode(["success" => true, "token" => $token]);
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