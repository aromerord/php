<?php 

/**
 * Escribir un script que muestre los números pares que hay entre 1 y 100
 */

for ($i=0; $i <= 100; $i++) { 
    if($i%2 == 0) {
        echo $i."</br>";
    }
}

?>