<?php 

$constants = 'Constantes en PHP';

echo '<h1>'.$constants.'</h1>'; 


echo '<h3>Definición de constantes</h3>';

define('name', 'Antonio Romero'); 

var_dump(name);

echo name; 

echo '</br>';


echo '<h3>Constantes predefinidas</h3>';

echo PHP_OS;

echo '</br>';

echo PHP_EXTENSION_DIR;

echo '</br>';

echo __FILE__; 

?>