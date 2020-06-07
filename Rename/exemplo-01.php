<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

//Criando Pastas(diretórios)
if (!is_dir($dir1)) mkdir($dir1); 
if (!is_dir($dir2)) mkdir($dir2);


//Criando um arquivo dentro da pasta folder_01
$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);
}

//Movendo o arquivo de uma pasta para a outra.

rename(
	$dir1 . DIRECTORY_SEPARATOR . $filename, // origem
	$dir2 . DIRECTORY_SEPARATOR . $filename  // destino
);


echo "Arquivo movido com sucesso!";

?>