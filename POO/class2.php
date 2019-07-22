<?php

class Carro {
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){

        return $this->modelo;
    }

    public function setModelo($modelo2){
        
       $this->modelo = $modelo2;
    }

    public function getMotor(){

        return $this->motor;
    }
    
    public function setMotor($motor2){

        $this->motor = $motor2;
    }

    public function getAno():int{

        return $this->ano;
    }

    public function setAno($ano2){

        $this->ano = $ano2;
    }

    public function exibir(){
        
        return array(
            'modelo'=>$this->getModelo(),
            'motor'=>$this->getMotor(),
            'ano'=>$this->getAno()
        );
    }

    
}

$gol = new Carro();
$gol->setModelo("Gol");
$gol->setMotor("V8");
$gol->setAno("2019");
var_dump($gol->exibir());