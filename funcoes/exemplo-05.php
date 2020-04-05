<?php

$a = 10;

function trocavalor(&$a){ // esta variável $a não é igual a $a de cima. se colocar (&$a) é passagem de parâmetro por referencia (sem é por valor), 
                        // neste caso tudo que muda na função, muda também na variável de cima, pois esta referenciando.

    $a += 50;

    return $a;
}

echo trocavalor($a);
echo "<br>";
echo trocavalor($a);
echo "<br>";
echo $a;




?>