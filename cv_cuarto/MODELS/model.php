<?php
class enlacesPaginas
{

    public static function  enlacesPaginasModel($enlacesModels)
    {

        if ($enlacesModels === "nosotros" || $enlacesModels === "servicios" || $enlacesModels === "contactanos" || $enlacesModels === "login") {
            $Modulo = "VIEW/" . $enlacesModels . ".php";
        } else {
            $Modulo = "VIEW/inicio.php";
        }
        return $Modulo;
    }
}