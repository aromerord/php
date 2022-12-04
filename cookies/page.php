<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies en PHP</title>
</head>
<body>

<div>
    <h1>Cookies en PHP</h1>
        <ul>
            <li><a href="index.php">Ir a Inicio</a></li>
            <li><a href="delete.php">Eliminar cookie</a></li>
        </ul>
</div>

<?php 

// Uso de la cookie
echo($_COOKIE['year']);

?>
    
</body>
</html>