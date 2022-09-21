<?php
$nombres =[
    "Alejandro",'Joel','Alex','Ricard','Al','Adria','Hugo','Sergi'
];

//foreach($nombres as $valor){
//   echo "<li> El tamaño de " .$valor. " es " .strlen($valor);

//}

//Per a calcular la longitud màxima de l'array faig servir array_map
$max_len = max(array_map('strlen', $nombres));
echo 'El valor màxim és : ' .$max_len;
echo '</br>';
$min_len = min(array_map('strlen', $nombres));
echo 'El valor minim és : '.$min_len;
