
<?php

// Creer une boucle qui affiche 10étoiles
// Imbriquer la boucle dans une autre boucle afin d afficher 10 lignes de 10 etoiles
// Nous  obtenons un carré. trouver le moyen de modif le code pr obtenir un triangle rectangle

for ($i = 10; $i > 0; $i--){
    for ($j = 10; $j > 0; $j--) {
        echo'⭐';
} 

echo '<br/>';
}


/*
☆☆☆☆☆★☆☆☆☆☆
☆☆☆☆★★★☆☆☆☆
☆☆☆★★★★★☆☆☆
☆☆★★★★★★★☆☆
☆★★★★★★★★★☆
★★★★★★★★★★★
*/
$fullstar = 1; // Nombre d etoiles pleines
$indexetoiles = 5; // Position

for ($x = 0; $x < 6; $x++) {
    for ($y = 0; $y < 11; $y++) {
        if ($y == $indexStar) {
            for ($z = 0; $z < $fullStar; $z++) {
                echo '★';
            }
            $y += $fullStar - 1;
        } else {
            echo '☆';
        }
    }
    $indexStar--;
    $fullStar += 2;
    echo '<br />';
}