<?php 

// Crear directorio
if(!is_dir('folder')){
    mkdir('folder', 0007) or die('Error al crear el directorio');
}

// Borrar directorio
rmdir('folder');


?>