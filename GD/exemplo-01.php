<?php
 
 header("Content-Type: image/png"); // Mudar o tipo de resposta

 $image = imagecreate(256, 256); // criar uma imagem, criando a tela

 $black = imagecolorallocate($image, 0, 0, 0); // patela de cores, 1º cor, sempre fica de fundo
 $red = imagecolorallocate($image, 255, 0, 0); // 

 imagestring($image, 5, 60, 120, "Curso PHP 7", $red); // esrevendo na tela

 imagepng($image); // informando o formato da imagem

 imagedestroy($image); // destruindo a variável


?>