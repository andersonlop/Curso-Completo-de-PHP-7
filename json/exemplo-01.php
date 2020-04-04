<?php

$pessoas = array();

array_push($pessoas, array(

    'nome'=> 'João',
    'idade'=> 20

));

array_push($pessoas, array(

    'nome'=> 'Anderson',
    'idade'=> 31

));

echo json_encode($pessoas); // transformando array em json

?>

