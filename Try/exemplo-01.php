<?php

try {

	throw new Exception("Houve um erro", 400);
	
} catch (Exception $e) {

	echo json_encode(array(
		"message"=>$e->getMessage(), // Pega a mensagem do erro.
		"line"=>$e->getLine(), // Pega a linha do código que deu o erro, no caso aqui é a linha 5.
		"file"=>$e->getFile(), // Pega o Arquivo que deu o erro
		"code"=>$e->getCode() // Pega o código do errp
	));
}


?>