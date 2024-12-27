<?php
class mvcController
{
    public function template()
    {
        include "VIEW/templates.php";
    }

    public function enlacesPaginasControler()
    {
        if (isset($_GET['action'])) { // Check if 'action' exists
            $enlacesPaginasController = $_GET['action'];
        } else {
            $enlacesPaginasController = 'inicio.php';
        }

        // Assuming enlacesPaginas::enlacesPaginasModel exists and works correctly
        $respuesta = enlacesPaginas::enlacesPaginasModel($enlacesPaginasController);
        include $respuesta;
    }
}

?>