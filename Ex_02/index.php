<?php
$nombres = [
    'Alejandro', 'Joel', 'Alex', 'Ricard', 'Ramon', 'Adrià', 'Hugo', 'Sergio'
];
foreach ($nombres as $nombre) {
    echo '<li>' . $nombre;
    echo '</br>';
}
echo '<pre>';
echo '</br>';
print_r($nombres);//Permite ver el contenido de la variable
echo "El número toral de compañeros es => " .count($nombres);
echo '</pre>';
echo '</br>';
