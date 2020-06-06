<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) { // forech nas linhas
	
	$data = array();

	foreach ($row as $key => $value) { //foreach é para cada

		array_push($data, $value);	

	}// end foreach de colunas

	fwrite($file, implode(",", $data) . "\r\n"); //adicionas os dados da linha dentro da do arquivo

} // End foreach de linha

fclose($file);


?>