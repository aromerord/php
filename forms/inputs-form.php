<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>

    <h1>Formularios</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <p>
            <label for="name">Nombre:</label> 
            <input type="text" name="name" placeholder="Nombre"/> 
        </p>
        <p> 
            <label for="surname">Apellido: </label> 
            <input type="text" name="surname" placeholder="Apellido"/> 
        </p>
        <p> 
            <label for="date">Fecha: </label> 
            <input type="date" name="date" /> 
        </p>
        <p> 
            <label for="email">Email: </label> 
            <input type="email" name="email" /> 
        </p>
        <p> 
            <label for="file">Archivo: </label> 
            <input type="file" name="file" multiple="multiple"/> 
        </p>
        <p> 
            <label for="number">Edad: </label> 
            <input type="number" name="number"/> 
        </p>
        <p> 
            Hombre <input type="checkbox" name="surname" value="man" placeholder="sex"/> 
            &nbsp;
            Mujer <input type="checkbox" name="surname" value="woman" placeholder="sex"/> 
        </p>
        <p> 
            <label for="password">Contraseña: </label> 
            <input type="password" name="password"/> 
        </p>
        <p> 
            Soltero/a: <input type="radio" name="civilstate" value="soltero/a"/> 
            Casado/a: <input type="radio" name="civilstate" value="casado/a"/> 
        </p>
        <p> 
            <label for="web">Página Web: </label> 
            <input type="url" name="web"/> 
        </p>
        <p> 
            <label for="color">Color: </label> 
            <input type="color" name="color" /> 
        </p>
        <p>
            <input type="submit" value="Botón"/>
        </p>
        <p>
            <textarea></textarea>
        </p>
        <p>
            Películas:
            <select name="movies">
                <option value="spiderman">Spiderman</option>
                <option value="ironman">IronMan</option>
            </select>
        </p>
        <p> 
            <input type="submit" value="Enviar" /> 
        </p>
    </form>
    
</body>
</html>