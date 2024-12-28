<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTA</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/color.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.easyui.min.js"></script>
    <script src="./js/operaciones.js"></script>
</head>

<body>
    
    <header>
        <img src="images/images.png" class="imagen1"></img>
    </header>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="index.php?action=inicio">INICIO</a></li>
            <li><a href="index.php?action=nosotros">NOSOTROS</a></li>
            <li><a href="index.php?action=contactanos">CONTACTANOS</a></li>
            <li><a href="index.php?action=servicios">SERVICIOS</a></li>
        </ul>
    </nav>
    <section>
        <?php
        require_once("CONTROLS/controller.php");
        require_once("MODELS/model.php");
        $mvc = new mvcController();
        $mvc->enlacesPaginasControler();
        ?>
    </section>
    <footer>
        Derechos Reservados @cuartoSoftware
    </footer>
</body>

</html>
