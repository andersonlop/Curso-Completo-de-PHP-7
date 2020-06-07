<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {

	$file = fopen($filename, "r");

	$headers = explode(",", fgets($file)); //pegando os titulos 

	$data = array();

	while ($row = fgets($file)) {
		
		$rowData = explode(",", $row);
		$linha = array();

		for ($i = 0; $i < count($headers); $i++){

			$linha[$headers[$i]] = $rowData[$i];

		}

		array_push($data, $linha);
	}

	fclose($file); // não deixa o arquivo na memória

	echo json_encode($data);
}

?>