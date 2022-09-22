<?php

/*$tamaño = 5;

for ($i = 1; $i <= $tamaño; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }

    echo "<br>";
}
for ($i = 1; $i <= $tamaño - 1; $i++) {
    for ($j = 0; $j < $tamaño - $i; $j++) {
        echo "*";
    }
    echo "<br>";

}

$tamaño = 5;

for ($i = 1; $i <= $tamaño; $i++) {
    for ($j = 0; $j < $tamaño - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 1; $i <= $tamaño - 1; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $tamaño - $i; $k++) {
        echo "*";
    }
    echo "<br>";
}

*/





$tamaño = 5;
for ($i = 1; $i <= $tamaño; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    for ($j = 0; $j < $tamaño - $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    echo "<br>";

}
for ($i = 1; $i <= $tamaño-1; $i++) {
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


