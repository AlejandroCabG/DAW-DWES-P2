<?php

for($i=0;$i<=10;$i++){
    for ($j=1; $j <=$i; $j++) {
        echo '*';
    }
    echo'</br>';
}

$n=10;
for($i=$n;$i>=1;$i--){
    for ($s = 1; $s <= $n; $s++) {// Imprime el número de espacios

        //echo '&nbsp;'; //para desplazar la pirámide
    }
    for ($j=1; $j <=$i; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '<hr>';


?>

