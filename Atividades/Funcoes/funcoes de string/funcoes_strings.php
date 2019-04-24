<?php

//strtolower, converte um texto para letra minuscula

$texto= "Curso Completo de PHP"; 
echo strtolower($texto);
echo '<br/>';

//strtoupper, converte um textos para letras maiusculas

$texto= "Curso Completo de PHP &*#$@";
echo strtoupper($texto);
echo '<br/>';

//ucfirst deixa a primeira letra maiuscula
$texto= "curso completo de php &*#$@";
echo ucfirst($texto);
echo '<br/>';

?>