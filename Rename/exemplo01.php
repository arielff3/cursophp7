<?php

if (!is_dir("pasta01") and !is_dir("pasta02")){
    mkdir("pasta01");
    mkdir("pasta02");
}

$filename = "text01.txt";
if (!file_exists("pasta01".DIRECTORY_SEPARATOR.$filename)) {

        $file = fopen("pasta01".DIRECTORY_SEPARATOR.$filename, "w+");
        fwrite($file, "Ariel Franco Ferreira");
        fclose($file);

}
$origem = "pasta01".DIRECTORY_SEPARATOR.$filename;
$destino = "pasta02".DIRECTORY_SEPARATOR.$filename;
rename($origem, $destino);

echo "Arquivo movido com sucesso";
