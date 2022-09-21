<?php
$paises= [
    'ESP'=> ['pais'=> 'España','codigo'=>724],
    'AND'=> ['pais'=> 'Andorra','codigo'=>020],
    'DDR'=> ['pais'=> 'Alemania','codigo'=>276],
    'DZA'=> ['pais'=> 'Argelia','codigo'=>012],
    'ITA'=> ['pais'=> 'Italia','codigo'=>380],
    'HUN'=> ['pais'=> 'Hungria','codigo'=>348],
    'CMR'=> ['pais'=> 'Camerún','codigo'=>348],
    'ISR'=> ['pais'=> 'Israel','codigo'=>376],
    'BRB'=> ['pais'=> 'Barbados','codigo'=>052],
    'AGO'=> ['pais'=> 'Angola','codigo'=>024],

];

foreach($paises as $alfa=> ['pais'=> $pais,'codigo'=>$codigo]){
    echo 'El país '.$pais.' con código alfa-3 ' .$alfa. ' con código numérico: ' .$codigo;
    echo '</br>';
}


