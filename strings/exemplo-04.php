<?php 

$frase = "A repetição é mãe da retenção."; ///// quando se quer procurar uma palavra dentro de um texto.

$palavra = "mãe";

$q = strpos($frase, $palavra); //// $q (variável de query(pesquisa), "e o que quer pesquisar")

var_dump($q); ////// somente para mostras a posição em que a palavra está

echo "<br>";
echo "<br>";

// mostra antes da palavra mae e mostra a frase
$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";
echo "<br>";

var_dump($texto2); /// mostras depois///////////



?>