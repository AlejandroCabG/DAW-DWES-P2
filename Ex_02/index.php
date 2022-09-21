<?php
$nombres = [
    'Alejandro', 'Joel', 'Alex', 'Ricard', 'Ramon', 'Adrià', 'Hugo', 'Sergio'
];
foreach ($nombres as $nombre) {
    echo '<li>' . $nombre;
    echo '</br>';
}
echo '<pre>';
print_r($nombres);//Permet veure el contingut de la variable
echo count($nombres);
echo '</pre>';
echo '</br>';
