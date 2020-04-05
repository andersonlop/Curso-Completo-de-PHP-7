<?php 

////////// escopo de variavel/////////////// /* até onde a variável será enchergado*/

$nome = "Anderson"; // escopo 1

function teste(){ // escopo 2

	global $nome; // ver globalmente a variável nome, ou usar nesta função a variavel nome
	echo $nome;
}

function teste2(){ 

	echo $nome. "agora no teste 2";

}

teste(); // chamando a função
teste2();



?>