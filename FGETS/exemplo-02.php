<?php

$filename = "logo.png";


$base64 = base64_encode(file_get_contents($filename)); // ler inteiro o conteudo d um arquivo e (convertendo binário em string)

$fileinfo = new finfo(FILEINFO_MIME_TYPE); // pede o tipo do arquivo(seja png, jpeg, etc... pega dimamicamente)

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;


?>

<a href="<?=$base64encode?>" target="_blank">Link da Imagem</a>

<img src="<?=$base64encode?>">