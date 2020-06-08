<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_heigth = 256;

// $data = getimagesize($file);

// $width = $data[0];
// $height = $data[1];

list($old_width, $old_height) = getimagesize($file); //variaveis com a altura e largura atual da imagem

$new_image = imagecreatetruecolor($new_width, $new_height); // criando uma nova tela

$old_image = imagecreatefromjpeg($file); // criando uma imagem a partir de $file

imagecopyresampled( // mesclando as duas imagens
	$new_image, // imagem destino
 	$old_image,  // imagem de origem
 	0, // posição da imagem de dstino(x)
 	0, // posição da imagem de destino(y)
 	0, // posição da imagem de origem(x)
 	0, // posição da imagem de origem(x)
 	$new_width, // largura da imagem de destino
 	$new_height, // altura da imagem de destino
 	$old_width, // largura da imagem de origem
 	$old_width); // altura da imagem de origem


imagejpeg($new_image); // gerando a imagem

imagedestroy($new_image); //destroi aas imagens da memoria



?>