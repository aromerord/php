<?php

echo '<h1>Funciones para trabajar con arrays</h1>'; 

$movies = array('Batman', 'El Señor de los Anillos', 'Spiderman');

$numbers = array(528,689,2458,257);

echo '<h3>Ordenar por orden alfabético</h3>';
asort($movies);
var_dump($movies);
 
echo '<h3>Ordenar por orden alfabético y numéricamente</h3>';
sort($movies);
var_dump($movies);

sort($numbers);
var_dump($numbers);

echo '<h3>Añadir elementos</h3>';
$numbers[] = 17;
var_dump($numbers);

array_push($numbers, 2058);
var_dump($numbers);

echo '<h3>Eliminar elementos</h3>';
array_pop($numbers); // Elimina el último elemento
var_dump($numbers);

unset($numbers[2]); // Elimina el elemento del indice indicado
var_dump($numbers);

echo '<h3>Otras funciones</h3>';

$i = array_rand($numbers); // Obtiene un indice del array de forma aleatoria
var_dump($numbers[$i]);

array_reverse($numbers); // Revierte el orden de los elementos del array
var_dump($numbers);

$result = array_search('Batman', $movies); // Buscar dentro de un array
var_dump($result);

$elements = count($movies); // Contar el número de elementos
var_dump($elements);




?>