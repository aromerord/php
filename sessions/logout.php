<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>

<div>
    <h3>Sesión cerrada</h3>
        <ul>
            <li><a href="page.php">Ir a otra página</a></li>
        </ul>
</div>

<?php 

// Cerrar la sesión
session_start();

session_destroy();

?>
    
</body>
</html>

