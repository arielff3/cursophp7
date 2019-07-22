<?php

class Documento{

    private $numero;

    public function getNumero(){

        return $this->numero;
    }

    public function setNumero($valor){

        return $this->numero = $valor;
    }

}


class CPF extends Documento {

    public function valirdar():bool{

        $numeroCPF = $this->getNumero();
        //validação cpf
        return true;
    }
}

$doc = new CPF();
$doc->setNumero(123123123);
var_dump ($doc->valirdar());
echo $doc->getNumero();