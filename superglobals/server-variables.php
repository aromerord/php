<?php 

echo '<h1>Variables de servidor</h1>';

echo $_SERVER['SERVER_ADDR']; // Ip
echo '</br>';

echo $_SERVER['SERVER_NAME']; // Dominio
echo '</br>';

echo $_SERVER['SERVER_SOFTWARE']; // Software utilizado
echo '</br>';

echo $_SERVER['HTTP_USER_AGENT']; // Navegador
echo '</br>';

echo $_SERVER['REMOTE_ADDR']; // Ip cliente
echo '</br>';

?>