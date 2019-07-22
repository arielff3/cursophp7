<?php

function soma(float ...$valores){

    return array_sum($valores);
}

echo soma(1,20.8,3,4);