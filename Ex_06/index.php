<?php


$tamaño = 12;
for ($i = 1; $i <= $tamaño; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    for ($j = 0; $j < $tamaño - $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";//hago 4 espacios para mover el triángulo a la izquierda.
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    echo "<br>";

}
for ($i = 1; $i <= $tamaño; $i++) {
    for ($j = 0; $j < $tamaño - $i; $j++) {
        echo "*";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $tamaño - $i; $k++) {
        echo "*";
    }
    echo "<br>";

}


