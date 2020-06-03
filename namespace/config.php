<?php

// Onde procura as classes
spl_autoload_register(function($nameClass){ // function recebe o nome da classe que esta sendo chamado.

	$dirClass = "class"; // onde é a pasta que ele deve buscar
	$filename = $dirClass . DIRECTORY_SEPARATOR .  $nameClass .".php"; // firename é o caminho(a estensão) onde esta o arquivo.

	if(file_exists($filename)){

		require_once($filename);
	}
});

?>