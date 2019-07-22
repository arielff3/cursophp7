<?php

$nome = "ariel franco";
// Tudo maiusculo
echo strtoupper($nome);
echo "<br>";
// Tudo minusculo
echo strtolower($nome);
echo "<br>";
// Primeira letra de cada palavra maiucula
echo ucwords($nome);
echo "<br>";
// Subistituir
$nome = str_replace("f", "G", $nome);
echo $nome;