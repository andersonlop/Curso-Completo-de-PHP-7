<?php 

$a = 30;
$b = 55;
$c = 30;
$d = 15.0;
$e = 15;


var_dump($a > $b); // vai mostrar se a condição é verdadeiro ou falso

echo "<br>";

var_dump($a < $b);

echo "<br>";

// var_dump($a = $b); // apenas um igual atribui valor, que operador de atribuição

var_dump($a == $b); // operador de comparação de valor

echo "<br>";

var_dump($a == $c); // mostra que são iguais os valores


echo "<br>";

var_dump($d == $e); // apenas de serem parecidos(15 e 15), mas como a $d é boleano e o $e é inteiro não são iguais o tipo de dado.

echo "<br>";

var_dump($d === $e); // para comparar o valor e o tipo (três iguais é para comparação de identidade)

echo "<br>";

var_dump($a != $b);

echo "<br>";

var_dump($a !== $b);

?>