<?php
$n=8;
for($i=$n;$i>=1;$i--){
    for ($s = 1; $s <= $n; $s++) {// Imprime el número de espacios
        //echo '&nbsp;'; //para desplazar la pirámide
    }
    for ($j=1; $j <=2*$i-1 ; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '<hr>';


//Tamaño de la línea más larga, la de en medio de ambos triángulos
$num = 8;
//bucle para el triángulo superior
for($n=1; $n <= $num; $n++){
    //echo '&nbsp','</br>';
    //echo str_pad('', $n, '*') . '<br />';
    echo '*';

}

//bucle para el triángulo invertido
for($n=$num - 1; $n >= 1; $n--){
    echo str_pad('', $n, '*') . '<br />';
}
?>

