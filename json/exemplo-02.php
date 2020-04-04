<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Anderson","idade":31}]';

$data = json_decode($json, true); // transformando json em array, sempre colocar , true se não vira objeto.

var_dump($data);


?>