<?php

$images = scandir("images");

//var_dump($images);


$data = array();



foreach ($images as $img) {
	if(!in_array($img, array(".", ".."))) {

	// o in_array, faz uma busca dentro de um array 

	$filename = "images" . DIRECTORY_SEPARATOR . $img;

	$info = pathinfo($filename); //pegando informações do arquivo.

	$info["size"] = filesize($filename); //pegando o tamanho do arquivo em bytes

	$info["modified"] = date("d/m/Y H:i:s", fileatime($filename)); // peda a ultima data que foi modificado

	$info["url"] = "http://127.0.0.4/DIR/" . str_replace("\\","/", $filename); // acessar o arquivo via url


	array_push($data, $info); // insere no array, esse array

	//var_dump($info);

	}
}

echo json_encode($data);



?>