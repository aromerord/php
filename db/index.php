<?php 

// Conectar a una base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'heroes';
$connection = mysqli_connect($host, $user, $password, $database);

// Comprobar la conexión
if(mysqli_connect_errno()){
    echo 'La conexión a la base de datos ha fallado.' . mysqli_connect_errno();
}

// Consulta para configurar la codificación de caracteres
mysqli_query($connection, "SET NAMES 'utf8'");

// Realizar consultas
$query = mysqli_query($connection, "SELECT * FROM hero");
var_dump($query);

echo '<h1>Héroes</h1>';

while ($hero = mysqli_fetch_assoc($query)) {
    echo '<h3>' . $hero['alterego'] . '</h3>';
}


?>