<?php 

echo '<h1>Arrays en PHP</h1>'; 

echo '<h3>Definir y crear arrays</h3>';

$movies = array('Batman', 'El Señor de los Anillos', 'Spiderman');
var_dump($movies);
var_dump($movies[1]);
echo($movies[1]);

$comics = ['Batman', 'Ironman', 'Capitán America'];
var_dump($comics);
var_dump($comics[1]);
echo($comics[2]);

echo '</br>';

echo '<h3>Recorrer arrays</h3>';

for ($i=0; $i < count($movies); $i++) { 
    echo($movies[$i] . '</br>');
}

echo '</br>';

foreach ($comics as $key => $value) {
    echo($key . ' - ' . $value . '</br>');
}

echo '</br>';

foreach ($comics as $comic) {
    echo($comic . '</br>');
}

echo '</br>';

echo '<h3>Arrays asociativos</h3>';

$hero = array(
    'name' => 'Tony Stark',
    'alias' => 'Iron Man',
    'house' => 'Marvel'
);

var_dump($hero);
var_dump($hero['house']);

echo '</br>';

echo '<h3>Arrays multidimensionales</h3>';

$heroes = array(
    array(
        'name' => 'Tony Stark',
        'alias' => 'Iron Man',
        'house' => 'Marvel'
    ),
    array(
        'name' => 'Steve Rogers',
        'alias' => 'Capitán America',
        'house' => 'Marvel'
    ));

var_dump($heroes);

echo '<h3>Recorrer arrays multidimensionales</h3>';

foreach ($heroes as $key => $hero) {
    echo($key . ' - ' . $hero['name'] . ' - ' . $hero['alias'] . ' - ' . $hero['house'] . '</br>');
}



?>