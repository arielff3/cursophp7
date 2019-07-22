<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){

        echo "O veiculo está a uma velocidade de: " .$velocidade." KM/h"."<br>";
        
    }
    public function freiar($velocidadeFreiar){

        echo "O veiculo deve freiar quando atingir ".$velocidadeFreiar."KM/h"."<br>";
    }
    public function trocarMarcha($marcha){
        
        echo "O veiculo engato a marcha ".$marcha;

    }
}

class DelRey extends Automovel{

        public function empurrar(){

            
        }

}

$carro = new DelRey();
$carro->acelerar(100);