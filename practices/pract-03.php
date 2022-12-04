<?php 

/**
 * Recoger dos números por la url y hacer las operaciones básicas de una calculadora
 * ?num1=7&num2=14
 */

 if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo $num1 + $num2;
    echo '</br>';
    echo $num1 - $num2;
    echo '</br>';
    echo $num1 * $num2;
    echo '</br>';
    echo $num1 / $num2;

 } else {
     echo 'Escribe los valores por la url';
 }


?>