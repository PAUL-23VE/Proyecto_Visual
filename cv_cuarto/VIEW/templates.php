<?php
session_start(); // Iniciar sesión para acceder a las variables de sesión

// Verificar si el token existe en la sesión
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token']; // Obtener el token guardado en la sesión
} else {
    $token = null; // Si no hay token, asignar null
}

// Lógica para cerrar sesión
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['token']); // Borrar el token
    header("Location: index.php?action=login"); // Redirigir al login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTA</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/color.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.easyui.min.js"></script>
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
            <!-- Cambiar el enlace de login o cerrar sesión según el estado del token -->
            <?php if ($token): ?>
                <li><a href="index.php?action=logout">CERRAR SESION</a></li>
            <?php else: ?>
                <li><a href="index.php?action=login">LOGIN</a></li>
            <?php endif; ?>
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
        Derechos Reservados @CuartoSoftware
    </footer>
</body>

</html>