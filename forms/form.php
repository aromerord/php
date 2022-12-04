<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error === 'name') {
            echo '<strong style="color:red"> El nombre introducido no es correcto </strong>';
        } else if($error === 'name'){
            echo '<strong style="color:red"> Los apellidos introducidos no son correctos </strong>';
        } else if($error === 'age'){
            echo '<strong style="color:red"> La edad introducida no es correcta </strong>';
        } else if($error === 'email'){
            echo '<strong style="color:red"> El email introducido no es correcto </strong>';
        }else if($error === 'password'){
            echo '<strong style="color:red"> La contraseña introducida no es correcta </strong>';
        }
    }
    ?>
    <h1>Formulario</h1>
    <form action="result" method="POST" enctype="multipart/form-data">
        <p>
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Nombre" required="required" patern="[A-Za-z]+" />
        </p>
        <p>
            <label for="surname">Apellidos: </label>
            <input type="text" name="surname" placeholder="Apellidos" required="required" patern="[A-Za-z]+" />
        </p>
        <p>
            <label for="age">Edad: </label>
            <input type="number" name="age" patern="[0-9]+" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" required="required" />
        </p>
        <p>
            <label for="password">Contraseña: </label>
            <input type="password" name="password" required="required" />
        </p>
        <input type="submit" value="Enviar" />
    </form>

</body>

</html>