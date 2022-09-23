<?php

function mayuscula($str)
{
   //Comprobar que sea mayúscula
    return $str === strtoupper($str);
}
$cadena="AVION";

// Recorro cada carácter de la cadena

for($i=0;$i<strlen($cadena);$i++)
    if (mayuscula($cadena)) {
        echo $cadena. " es mayúscula\n";
        echo '<br>';
    } else {
        echo $cadena. " no es mayúscula\n";
        echo '<br>';

    }
echo '<hr>';
function mayusculas($cadena)
{
    return $cadena === strtoupper($cadena);
}

$cadenas = ["aviones", "AVION", "caza"];
foreach ($cadenas as $cadena) {
    if (mayusculas($cadena)) {
        echo "$cadena es mayúscula\n";
        echo '<br>';
    } else {
        echo "$cadena no es mayúscula\n";
        echo '<br>';
    }
}

