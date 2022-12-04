<?php

// Funciones
function helloWord(){
    echo 'Hola mundo';
    echo '</br>';
}
helloWord();
echo '</br>';

// Parámetros
function numbers($number){
    echo 'Tabla de multiplicar del ' . $number . '</br>';
    for($i=1; $i<=10; $i++) {
        $operation = $number * $i;
        echo "$number  x  $i = $operation  </br>";
    }
}
numbers(5);
echo '</br>';

// Varios parámetros
function operations($num1, $num2) {
    echo 'Suma: '. ($num1 + $num2) . '</br>';
    echo 'Resta: '. ($num1 - $num2) . '</br>';
    echo 'Producto: '. ($num1 * $num2) . '</br>';
    echo 'División: '. ($num1 / $num2) . '</br>';
}
operations(5, 8);
echo '</br>';

// Parámetros opcionales
function hero($name, $alias, $house='Marvel'){
    echo "$name - $alias - $house";
    echo '</br>';
}

hero('Peter Parker', 'Spiderman');
hero('Superman', 'Clark Kent', 'DC');
echo '</br>';

// Con return
function city($name){
    return $name;
}
echo city('New York');
echo '</br>';

// Funciones dentro de otras
function location($location){
    return city($location);
}
echo location('Monument Valley');
echo '</br> </br>';

// Funciones variables 
function marvelHero(){
    return 'IronMan';
}
$hero = "marvelHero";
echo $hero();

?>