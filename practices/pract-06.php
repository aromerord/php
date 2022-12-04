<?php 

/**
 * Hacer un programa que tenga un array de 8 numeros enteros y que haga lo siguiente:
 * - Recorrerlo y mostrarlo
 * - Ordenarlo y mostrarlo
 * - Mostrar su longitud
 * - Buscar algún elemento 
 */


 $numbers = array(44,55,98,657,239,17,8,924);

 // Recorrer y mostrar
 for ($i=0; $i < count($numbers); $i++) { 
     echo $numbers[$i] . '</br>';
 }

 // Ordenar y mostrar
sort($numbers);
var_dump($numbers);

// Mostrar su longitud
$elements = count($numbers);
var_dump($elements);

// Buscar algún elemento
$result = array_search(239, $numbers); 
var_dump($result);



?>