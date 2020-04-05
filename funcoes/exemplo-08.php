<?php

function soma(int ...$valores):string { //declarando o tipo. a conversão do tipo no retorno

    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2); // ignora o . e soma apenas o número, pois lá em cima está declarado int.
echo "<br>";


?>