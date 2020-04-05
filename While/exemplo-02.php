<?php

$total = 150;
$desconto = 0.9;

do { // executa pelo menos uma vez mesmo a condição sendo falso. 

    $total *= $desconto;
} while ($total > 100);

echo $total;


?>