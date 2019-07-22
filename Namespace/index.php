<?php

require_once("config.php");

use Cliente\Cadastro;


$cad = new Cadastro();
$cad->setNome("Ariel Franco");
$cad->setEmail("arielfrancoferreira@hotmail.com");
$cad->setSenha("1234");

$cad->registrarVenda();

echo $cad;