<?php

class Conexion
{

    public  static function conectar()
    {
        $serverName = 'sql3.freemysqlhosting.net';
        $userName = 'sql3756113';
        $password = 'yHVCR3ibYr';
        $db = 'sql3756113';
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