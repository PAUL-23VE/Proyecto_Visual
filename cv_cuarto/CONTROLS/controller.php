<?php
class mvcController
{
    public function template()
    {
        include "VIEW/templates.php";
    }

    public function enlacesPaginasControler()
    {
        if (isset($_GET['action'])) { 
            $enlacesPaginasController = $_GET['action'];
        } else {
            $enlacesPaginasController = 'inicio.php';
        }

        
        $respuesta = enlacesPaginas::enlacesPaginasModel($enlacesPaginasController);
        include $respuesta;
    }


public function guardarContacto($nombre, $email, $mensaje)
    {
        
        $conexion = new Conexion();
        $conn = $conexion->conectar();

       
        $query = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";

        
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("sss", $nombre, $email, $mensaje);

            if ($stmt->execute()) {
                echo "¡Mensaje enviado con éxito!";
            } else {
                echo "Error al enviar el mensaje: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error al preparar la consulta: " . $conn->error;
        }

        
        $conn->close();
    }
}
?>
