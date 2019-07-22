<?php

require_once("Sql.php");

$dados = new Sql();
$dados2 = $dados->select("SELECT * FROM tb_dados");

echo json_encode($dados2);