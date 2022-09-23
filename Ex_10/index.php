<?php
//Función
arrayClaveValor(['Bombardero'=>"18", 'Caza'=>"9", 'Reconocimiento'=>"25"],"asc","clave");

function arrayClaveValor($aviones,$orden,$elemento)
{

    if ($orden == "asc" && $elemento == "clave") {
        ksort($aviones);//Ordena un array por clave, manteniendo la correlación entre la clave y los datos
        foreach ($aviones as $nombre => $num) {
            echo "Els números son: ".$num . '<br>';
        }
    } elseif ($orden == "desc" && $elemento == "clave") {
        ksort($aviones);
        foreach ($aviones as $nombre => $num) {
            echo "Els números son: ".$num . '<br>';
        }
    }

    if($orden == "asc" && $elemento == "ele"){
        krsort($aviones);//Ordena un array por clave en orden inverso, manteniendo la correlación entre la clave
        // y los datos.
        foreach ($aviones as $nombre => $num) {
            echo "Els números son: ".$num. '<br>';
        }
    }
    elseif ($orden == "desc" && $elemento == "ele") {
        krsort($aviones);
        foreach ($aviones as $nombre => $num) {
            echo "Els números son: ".$num. '<br>';
        }


    }
}



