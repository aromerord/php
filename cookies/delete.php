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
        </ul>
</div>

<?php 

// Eliminación de la cookie
unset($_COOKIE['year']);
setcookie('year', '', time()-100); // Las cookies se eliminan al caducar

if(isset($_COOKIE['year'])) {
    echo($_COOKIE['year']);
}

// Redirección al index
header('Location: index.php');


?>
    
</body>
</html>