<?php

$file = fopen("log.txt", "a+"); //a função espera dois parametros(string), o primeiro é o caminho do arquivo, e o segundo como você uer controla esse arquivo. w+ é que vai criar um arquivo e escrever.



fwrite($file, date("Y-m-d H:i:s") . "\r\n"); // função para escrever algo no arquivo



fclose($file); // terminar, ou fechar a execução

echo " Arquivo criado com sucesso";

?>