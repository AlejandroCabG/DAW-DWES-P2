<?php
$nombres =[
    "Alejandro",'Joel','Alex','Ricard','Al','Adria','Hugo','Sergi'
];

foreach($nombres as $valor){
  echo "<li> El tamaño de " .$valor. " es " .strlen($valor);
    echo '<br><br>';

}

//Para calcular la longitud máxima del array uso array_map que envía cada valor del array a la función
//strlen para determinar el tamaño,y devuelve un array con los valores mínimo y máximoS de la función min y max.
$max_len = max(array_map('strlen', $nombres));
echo 'El valor máximo es : ' .$max_len;
echo '</br>';
$min_len = min(array_map('strlen', $nombres));
echo 'El valor mínimo es : '.$min_len;

