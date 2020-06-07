<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])){

	$cookie = json_encode($_COOKIE["NOME_DO_COOKIE"]);

	var_dump($cookie);

}

 ?> 