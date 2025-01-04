<?php

class Conexion
{

    public  static function conectar()
    {
        $serverName = 'localhost:3387';
        $userName = 'root';
        $password = '';
        $db = 'cuarto';
        $conn = mysqli_connect($serverName, $userName, $password, $db);
        if (!$conn) {
            echo('Error en la conexion: ' . mysqli_connect_error());
        } else {
            //echo 'Conexion exitosa';
            return $conn;
        }
    }
}
?>