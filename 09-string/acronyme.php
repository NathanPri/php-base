<?php
// function acronymes($string)
// {
//     $mots = explode(" ", $string);
//     $premierellettre = "";
//     // $string = str_replace(' ', '-', $string);
// 	foreach($mots as $initiale){
// 		$premierellettre .= $initiale[0];
//     }
//     // Retour de la chaine en majuscule
//     return strtoupper($premierellettre);
// }
// echo acronymes('world of warcraft').'<br />';
// echo acronymes('PHP : Hypertext Preprocessor').'<br />';
// echo acronymes( 'Hyper Text Mark Lang').'<br />';
// addslashes($premierellettre);

?>


<?php

function acronym($sentence)
{
    $words = explode(" ",$sentence);
    $acronym = " ";

    foreach($words as $word){
        $firstLetter = substr($word, 0, 1);
        $acronym .=  $firstLetter;
    }

    return strtoupper($acronym);
}
echo acronym('world of warcraft').'<br />';
echo acronym('PHP: Hypertext Preprocessor').'<br />';
echo acronym( 'Hyper Text Mark Lang').'<br />';

?>