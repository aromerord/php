<?php 

echo '<h1>Variables superglobales</h1>';

echo '<h3>Recoger variables por GET</h3>';
echo '</br>';

echo $_GET['name']; // En el array se indica el parámetro del GET a recoger
echo '</br>';

echo $_GET['surname'];
echo '</br>';

var_dump($_GET); // Muestra todos los datos que pueden llegar por GET


?>