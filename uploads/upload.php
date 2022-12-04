<?php 

    // Recoger el fichero
    $file = $_FILES['file'];

    var_dump($file);

    $name = $file['name'];
    $type = $file['type'];

    if($type == 'image/jpg' || $type == 'image/jpeg' 
        || $type == 'image/png' || $type == 'image/gif'){

            // Se crea un directorio si no existe para guardar las imágenes
            if(!is_dir('img')){
                mkdir('img', 0777);
            }

            // Se mueve la imagen al directorio
            move_uploaded_file($file['tmp_name'], 'img/'. $name);

            echo '<h1>Imagen subida correctamente</h1>'; 
            header('Refresh: 5; URL=index.php'); 

    } else {
        echo '<h1>El formato de la imagen no es correcto</h1>';
        header('Refresh: 5; URL=index.php');
    }

    die(); // Para la ejecución en caso de error
