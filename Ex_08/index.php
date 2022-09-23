<?php

function area_triangulo($base, $altura){
    $area = ($base*$altura)/2;
    return $area;

}

$base = 3;
$altura = 6;
$area= area_triangulo($base,$altura);
echo "Un triángulo de base $base y altura $altura tiene un área de => $area";
