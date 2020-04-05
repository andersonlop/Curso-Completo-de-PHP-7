<?php  


$resultado = 10 + 3 / 2;

echo $resultado;


echo "<br>";
echo "<br>";

$resultado1 = (10 + 3) / 2;


echo $resultado1;

echo "<br>";
echo "<br>";

///////////operadores logicos////////////////// precedencia de operador//////////////

$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3; // (as duas condições tem que ser iguais para apresentar true, caso uma dela não é apresentará false)


var_dump($resultado2);

echo "<br>";
echo "<br>";

$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3;


var_dump($resultado3);

?>