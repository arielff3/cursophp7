<?php
$json = '[{"nome":"jo\u00e3o","idade":28,"sexo":"masculino"},{"nome":"Ariel","idade":18,"sexo":"masculino"}]';

$data = json_decode($json, true);

var_dump($data);