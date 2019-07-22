<?php

// $a = 10;

// function trocaValor(&$b){


//     $b += 50;

//     return $b;

// }

// echo trocaValor($a);
// echo "<br>";
// echo trocaValor($a);
// echo "<br>";
// echo $a;

$pessoa = array(
    'nome' => 'Ariel',
    'idade' => 18
);
foreach($pessoa as &$value){
    
    if(gettype($value)  === 'integer') $value += 10;

    echo $value.'<br>';

}