<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

    <div>
        <h1>Cookies en PHP</h1>
        <ul>
            <li><a href="page.php">Ir a otra página</a></li>
        </ul>
    </div>

<?php 

/**
 * Una cookie es un fichero que se almacena en el equipo del usuario que visita la web, 
 * con el fin de recordar datos o rastrear cierto comportamiento del mismo en la web
 */

 // Crear una cookie

 setcookie('cookie', 'Valor de la cookie');

 // Cookie con expiración
 setcookie('year', 'Valor de la cookie', time() + (60*60*24*365)); // Cookie que dura un año


?>
    
</body>
</html>