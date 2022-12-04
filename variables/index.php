<?php 

$variables = 'Variables y tipos de datos en PHP';

echo '<h1>'.$variables.'</h1>'; 

$isTrue = true;
echo gettype($isTrue); // Para obtener el tipo de una variable, se puede usar la función gettype()

echo '</br>';

$number = 44;
echo gettype($number);

echo '</br>';

$decimal = 16.9;
echo gettype($decimal);

echo '</br>';

$text = 'Soy un texto';
echo gettype($text);

echo '</br>';

$variable = null;
echo gettype($variable);

var_dump($decimal); // La función var_dump() muestra toda la información de la variable

?>