<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>

    <div>
        <h1>Sesiones en PHP</h1>
        <ul>
            <li><a href="page.php">Ir a otra página</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

<?php 

/**
 * Las sesiones almacenan y persisten datos del usuario mientras navega en un sitio web hasta
 * que cierra sesión o cierra el navegador.
 */

    // Inciar la sesión
    session_start();

    // Definir una variable de sesión que se puede usar en cualquier página de la applicación
    $_SESSION['hero'] = 'IronMan activado en la sesión';

    echo($_SESSION['hero']);

?>
    
</body>
</html>