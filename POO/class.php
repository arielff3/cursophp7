<?php

class Pessoa {
    
    public $nome;
    
    public function falar(){

       return "O meu nome é ".$this->nome; 
    }
    
}

$ariel = new Pessoa();
$ariel->nome = "Ariel";
echo $ariel->falar();
