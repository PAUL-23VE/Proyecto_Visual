<?php
session_start(); // Iniciar sesión para acceder a las variables de sesión

// Obtener el token enviado desde el frontend
$data = json_decode(file_get_contents("php://input"));
$token_recibido = $data->token ?? null; // Si no hay token, asignar null

// Verificar si el token recibido coincide con el token guardado en la sesión
if ($token_recibido && isset($_SESSION['token']) && $_SESSION['token'] === $token_recibido) {
    // Si el token es válido, devolver una respuesta positiva
    echo json_encode(['success' => true]);
} else {
    // Si el token es inválido o no existe, devolver una respuesta negativa
    echo json_encode(['success' => false, 'message' => 'Token inválido o expirado']);
}
?>
