<?php
$aviones = [
    'Bombardero'=>"18", 'Caza'=>"9", 'Reconocimiento'=>"25",
];
arrayClaveValor(['Bombardero'=>"18", 'Caza'=>"9", 'Reconocimiento'=>"25"],"asc","clave");

function arrayClaveValor($aviones,$orden,$elemento)
{

    if ($orden == "asc" && $elemento == "clave") {
        ksort($aviones);
        foreach ($aviones as $nombre => $num) {
            echo $nombre. '<br>';
        }
    }
        elseif ($orden == "asc" && $elemento == "valor") {
            sort($aviones);
            foreach ($aviones as $nombre => $num) {
                echo $nombre . '<br>';
            }
        }

}



