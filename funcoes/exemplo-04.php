<?php

 function ola(){

    $argumentos = func_get_args(); // vai retornar como array todos os argumentos passados na função 

    return $argumentos;

 }

 var_dump (ola("Bom dia"));


?>