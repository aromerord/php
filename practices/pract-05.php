<?php 

/**
 * Hacer un programa que muestre los numeros entre dos números pasados por la url
 */

if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if($num1 < $num2){
        for ($i=$num1; $num2; $i++) { 
            echo $i . '</br>';
        } 
    } else {
        echo 'El numero 1 debe ser menor que el número 2';
    }



} else {
    echo 'Escribe los valores por la url';
}

?>