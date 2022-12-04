<?php 

echo '<h1>Operadores en PHP</h1>'; 

echo '<h3>Operadores aritmeticos</h3>';
$num1 = 55;
$num2 = 33;

echo ( $num1 + $num2 );
echo '</br>';
echo ( $num1 - $num2 );
echo '</br>';
echo ( $num1 * $num2 );
echo '</br>';
echo ( $num1 / $num2 );
echo '</br>';
echo ( $num1 % $num2 );
echo '</br>';

echo '<h3>Operadores de incremento y decremento</h3>';
$year = 2021;

echo $year++; // Incrementa en 1 -> 2021 + 1 
echo '</br>';
echo $year--; // Decrementa en 1 -> 2021 - 1
echo '</br>';
echo ++$year; // Incrementa en 1 -> 1 + 2021
echo '</br>';
echo --$year; // Incrementa en 1 -> 1 - 2021
echo '</br>';
 
echo '<h3>Operadores de asignación</h3>';
$age = 37;

echo ( $age+=5 );
echo '</br>';
echo ( $age-=5 );
echo '</br>';
echo ( $age*=5 );
echo '</br>';
echo ( $age/=5 );
echo '</br>';

?>