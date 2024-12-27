<?php
class enlacesPaginas
{

    public static function  enlacesPaginasModel($enlacesModels)
    {

        if ($enlacesModels === "nosotros" || $enlacesModels === "servicios" || $enlacesModels === "contactanos") {
            $Modulo = "VIEW/" . $enlacesModels . ".php";
        } else {
            $Modulo = "VIEW/inicio.php";
        }
        return $Modulo;
    }
}