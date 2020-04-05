<?php 

///////////////para deixar tudo maiusculo///////////////////

$nome = "anderson lopes";
$nome2 = "ANDERSON LOPES";
$nome3 = "anderson lopes de siqueira";



echo $nome; /////////// este caso apresenta tudo em minúsculo////////////////////

echo "<br>";
echo "<br>";

echo strtoupper($nome); //////// este apresenta tudo mauísculo

echo "<br>";
echo "<br>";

echo  strtolower($nome2); /////////// este deixa tudo minúsculo////////

echo "<br>";
echo "<br>";

echo ucwords($nome); ///// deixa a primeira letra de cada palavra maíuscula

echo "<br>";
echo "<br>";

echo ucwords($nome3);///// deixa a primeira letra de cada palavra maíuscula

echo "<br>";
echo "<br>";

echo ucfirst($nome); /// somente a primeira do nome ficá maiuscula (usar em um texto ai neste caso o parágrafo começa com a letra maiuscula)

echo "<br>";
echo "<br>";



?>