<?php

////////////////////////////// tipos de dados//////////////////////////////////////

// texto sempre tem aspas duplas ou simples

// numeros não tem aspas



/////////////////// tipos básicos /////////////////////////


$nome = "Hcode"; //string com aspas duplas

$site = 'www.hcode.com.br'; //string con aspas simples

$ano = 1990; // inteiro (número)

$salario = 5500.99; // ponto flutuante (casas decimais)

$bloqueado = false; // boleano


/////////////////// tipos compostos /////////////////////////



$frutas = array("abacaxi","laranjas","manga");  // array

//echo $frutas[2]; // [] para mostrar a posição do string (dados) que sempre começa com 0


$nascimento = new DateTime(); //objetos (orientação de objetos sendo usados)

//var_dump($nascimento);


////////////////////////// Tipos especiais ///////////////////

/*
O tipo resource é utilizado para indicar recursos externos que não são utilizados nativamente pelo PHP, mas que têm significado no contexto de uma operação especial, como manipulação de arquivos e imagens.*/

$arquivo = fopen("exemplo-03.php","r"); // Resource

//var_dump($arquivo);

/* O tipo null indica que uma variável não possui valor, uma variável é considerada null quando ela é setada com o valor null ou ainda não foi instanciada.

Obs: O valor null é case insensitive, ou seja, tanto faz se informamos o valor de uma variável como null, NULL, NulL ou nuLL, mas é recomendado manter um padrão, tente utilizar null ou NULL.*/


$nulo = null; // nulo (ausencia de valor, não existe)


$vazio = ""; // vazio (valor iniciado, mas não tem informação)


//////////////////////// Funcçoes Para validar tipo de dados //////////////////////////////


/*Funções para validar o tipo de uma variável

PHP oferece algumas funções para validar o tipo de uma variável, retornando um valor boolean, true ou false, confira:

isset – Informa se a variável foi iniciada.S
is_array – Verifica se a variável é um array.
is_bool – Verifica se a variável é um boolean.
is_float – Verifica se a variável é um float.
is_int – Verifica se a variável é um inteiro.
is_null – Verifica se a variável é NULL.
is_numeric – Verifica se a variável é um número ou uma string numérica.
is_object – Verifica se a variável é um objeto.
is_resource – Verifica se a variável é um resource.
is_escalar – Verifica se é uma variável escalar.
is_string – Verifica se a variável é uma string.*/



?>