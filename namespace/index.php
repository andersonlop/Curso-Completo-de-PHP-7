<?php

require_once("config.php");

use Clientes\Cadastro;

$cad = new Cadastro();

$cad->setNome(" Anderson Lopes");
$cad->setEmail("contato@andersonls.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>