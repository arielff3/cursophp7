<?php

abstract class Animal{

    public function falar(){
        
        return "Som";

    }

    public function mover(){

        return "Andar";
    }
}

class Cachorro extends Animal{

    public function falar(){

        return "Late";
    }

}

class Gato extends Animal{

    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{

    public function falar(){
        return "Cartar";
    }
    
    public function mover(){
        return "Voar e ". parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover(). "<br/>";
echo "<hr>";

$garfield = new Gato();
echo $garfield->falar() . "<br/>";
echo $garfield->mover();
echo "<hr>";

$picapau = new Passaro();
echo $picapau->falar() . "<br/>";
echo $picapau->mover();



