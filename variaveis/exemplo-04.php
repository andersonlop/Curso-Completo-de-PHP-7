<?php 

//////////////// Variáveis pré definidas (array suber globais)/////////////////////

/// metodo GET (para enviar informação)///

$nome = (int)$_GET["a"]; // http://localhost/variaveis/exemplos-04.php?a=123

// (int) antes do $_GET esta forçando a mudar o tipo

//var_dump($nome); // neste caso mostra o tipo de dados e o valor

//echo $nome; // exibe o valor

$ip = $_SERVER["REMOTE_ADDR"]; // mostra o ip do usuário

echo $ip;





?>