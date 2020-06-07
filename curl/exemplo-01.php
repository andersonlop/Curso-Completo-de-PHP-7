<?php

$cep = "14056853";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link); //iniciando a blibliotéca

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // não exigi certificado(ssl)

$response = curl_exec($ch); // executa a bibliotéca

curl_close($ch);

$data = json_decode($response, true);

print_r($data);


?>