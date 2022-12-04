<?php 

// Abrir archivo
$file = fopen('file.txt', 'a+');

// Leer contenido
while (!feof($file)) { 
    $text = fgets($file);
    echo ($text);
}

// Escribir en el archivo
fwrite($file, 'Añadiendo texto al fichero.');

// Cerrar archivo
fclose($file);

// Copiar archivo
copy('file.txt', 'file(2).txt') or die('Error al copiar');

// Renombrar archivo
rename('file(2).txt', 'newfile.txt');

// Eliminar archivo
unlink('newfile.txt') or die('Error al borrar');

// Comprobar si existe el fichero
if(file_exists('file.txt')){
    echo 'El archivo existe';
}


?>