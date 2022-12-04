<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<h1>Recoger variables por GET</h1>

<!-- http://localhost/proyectos/php/superglobals/form.php -->

<form method="GET" action="result-get.php"> 
    <p>
        <label for="name">Nombre</label>
        <input type="text" name="name"> 
    </p>

    <p>
        <label for="surname">Apellido</label>
        <input type="text" name="surname">   
    </p>

    <button type="submit"> Enviar</button>
</form>


<h1>Recoger variables por POST</h1>

<form method="POST" action="result-post.php"> 
    <p>
        <label for="name">Nombre</label>
        <input type="text" name="name"> 
    </p>

    <p>
        <label for="surname">Apellido</label>
        <input type="text" name="surname">   
    </p>

    <button type="submit"> Enviar</button>
</form>
    
</body>
</html>