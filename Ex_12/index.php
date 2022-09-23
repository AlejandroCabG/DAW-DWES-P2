<?php
//Un número primo es un número natural mayor que 1 que tiene únicamente dos divisores positivos distintos: él mismo y el 1

function calculaNum($num){
    if ($num == 1)
        return 0;

    for ($i = 2; $i <= sqrt($num); $i++){ //Se puede hacer que sea divisible entre 2, pero para que muestre
        // más valores uso sqrt.
        if ($num % $i == 0)//Si es divisible (haciendo el módulo %) indica que no es un número primo.
            return 0;
    }
    return 1;
}

//
$num = 257;
$valor =calculaNum($num);//Llamo a la función
if ($valor == 1){ //si el valor es igual a 1: es par.
    echo "$num => es un número primo.";
}else{
    echo "$num => no es un número primo.";
}