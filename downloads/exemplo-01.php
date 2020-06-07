<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link); //pega o conteúdo da imagem, ler o binário da imagem. 

$parse = parse_url($link); // interpretar o conteúdo da imagem

$basename = basename($parse["path"]); // pegando apenas o nome da imagem

$file = fopen($basename, "w+"); // criando o arquivo no disco do servidor

fwrite($file, $content); // escrevendo dentro dele, escrevendo no disco

fclose($file); //fechando o arquivo

?>

<img src="<?=$basename?>">