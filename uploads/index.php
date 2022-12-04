<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
</head>
<body>
    <h1>Subir archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        </br></br>
        <input type="submit" value="Enviar">
    </form>

    <h1>Lista de imágenes</h1>
    <?php 
        $dir = opendir('./img');

        if ($dir){
            // Mostrar las imágenes subidas
            while (($image = readdir($dir)) !== false) {
                if($image != '.' && $image != '..') {
                    echo "<img src='img/$image' width='200px'> </br>";
                }
            }
        }
    ?>
</body>
</html>