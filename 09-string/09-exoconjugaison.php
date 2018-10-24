<?php

function conjugate($verb){
$root = substr($verb, 0, -2);

$voyelles = ['a','e','i','o','u','y'];

    $subjects = [
        'Je' => 'e',
        'J\'' => 'e',
        'Tu' => 'es',
        'Il / Elle / On' => 'e',
        'Nous' => 'ons',
        'Vous' => 'ez',
        'Ils / Elles' => 'ent'
    ];
    // (J') Les exceptions
    if(in_array(substr($verb, 0, 1), $voyelles)){
        unset($subjects['Je']);


        // ajouter (j') en premier dnas le tableau
        // $subjects = array_merge(['J\'' => 'e'], $subjects);
    } else {
        unset($subjects['J\'']);
    }
    // *g exception (changer, manger, plonger) termine par -g.
    if(substr($root, -1) ==="g") {
        $subjects["Nous"] = "eons";
    }
    
    var_dump($subjects);

    $output ="";

    foreach ($subjects as $subject => $ending) {
        $output .= $subject . ' ' . $root . $ending . '<br />';
    }
    return $output;
}

echo conjugate('chercher');
echo conjugate('manger');
echo conjugate ('éffacer')

?>