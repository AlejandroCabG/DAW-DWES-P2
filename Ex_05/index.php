<?php

//Triángulo superior
for($i=0;$i<=10;$i++){
    for ($j=1; $j <=$i; $j++) {
        echo '*';
    }
    echo'</br>';
}

//Triángulo inferior
$n=10;
for($i=$n;$i>=1;$i--){//decremento el valor de *
    for ($s = 1; $s <= $n; $s++) {// Imprime el número de espacios

    }
    for ($j=1; $j <=$i; $j++) {
        echo '*';
    }
    echo '<br>';
}


?>

