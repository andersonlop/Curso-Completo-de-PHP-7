<?php

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) { // scandir ler todos os diretorios e exclui.
	if (!in_array($item, array(".", ".."))) {

		unlink("images/" . $item);
	}

}

echo "OK";

?>