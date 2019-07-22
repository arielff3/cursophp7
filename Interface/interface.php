<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo{

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

$civ = new Civic();
$civ->acelerar(100);
$civ->freiar(120);
$civ->trocarMarcha(1);

