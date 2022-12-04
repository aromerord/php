<?php 

// Debuggear
$name = 'Antonio';
var_dump($name);

//Fechas
echo date('d-m-Y');
echo '</br>';

echo time();
echo '</br>';

// Matemáticas
echo sqrt(8); // Raíz cuadrada
echo '</br>';

echo rand(2,20); // Número aleatorio en un rango
echo '</br>';

echo pi();
echo '</br>';

echo round(7.8566545, 2); // Redondeo
echo '</br>';


// Tipo de una variable
echo gettype($name); 
echo '</br>';

// Comprobación de tipos
if(is_string($name)){ 
    echo 'La variable es de tipo string';
    echo '</br>';
}

// Comprobar si existe
if(isset($name)){
    echo 'La variable existe';
    echo '</br>';
}

// Eliminar espacios
$text = "    texto con espacios  ";
echo $text;
echo var_dump($text);
$text2 = trim($text);
echo var_dump($text2); 

// Eliminar variables / indices de arrays
$year = 2020;
unset($year);

// Comprobar variables vacías
$var1 = "";
$var2 = null;
$var3 = 0;
$var4 = false;
if( empty($texto) && empty($var2) && empty($var3) && empty($var4)){
    echo 'Las variables están vacías';
    echo '</br>';
}

// Tamaño de una cadena
echo strlen($text);
echo '</br>';

// Encontrar caracter
$quote = 'La vida es bella';
echo strpos($quote, 'b');
echo '</br>';

// Reemplazar palabras de un string
echo str_replace('vida', 'moto', $quote);
echo '</br>';

// Mayúsculas y minúsculas
echo strtolower($quote);
echo '</br>';
echo strtoupper($quote);
echo '</br>';


?>