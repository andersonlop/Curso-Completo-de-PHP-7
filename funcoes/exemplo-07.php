<?php

function soma(int ...$valores){ //declaração de tipos escalares

    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2); // ignora o . e soma apenas o número, pois lá em cima está declarado int.
echo "<br>";


?>