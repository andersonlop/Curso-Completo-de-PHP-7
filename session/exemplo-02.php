<?php

require_once("config.php");

session_unset($_SESSION['nome']); //apaga a variavel nome (sessão), se não colocar a variável, ele apaga toda as variáveis de sessão

echo $_SESSION['nome'];

session_destroy(); // limpa a variável, e limpa o usuário

?>