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
    <h1>Sesiones en PHP</h1>
        <ul>
            <li><a href="index.php">Ir a Inicio</a></li>
        </ul>
</div>

<?php 

// Usar variables de sesión en otras páginas
session_start();

echo($_SESSION['hero']);

?>
    
</body>
</html>