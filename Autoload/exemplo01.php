<?php

function incluirClass($nomeClasse){
    
    if(file_exists($nomeClasse.".php") === true){
        require_once("$nomeClasse".".php");
    }
    
}

spl_autoload_register("incluirClass");   
spl_autoload_register(function($nomeClasse){

    if(file_exists("Abstrata". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true){
        require_once("Abstrata". DIRECTORY_SEPARATOR .$nomeClasse.".php");
    }

});
spl_autoload_register("incluirClass");   
$carro = new DelRey();

$carro->acelerar(80);