<?php


// ouverture tableau
echo '<table align="center" border"1" style="border-collpase: collapse">';

// entête
echo '<tr><td align="center" style="width: 20px;">'.'X'.'</td>';
for($i = 0; $i<=10; $i++){
    echo '<td align="center" style="width: 20px;">'.$i.'</td>';  
 }
echo'</tr>';


// Ligne
for($j = 0; $j<=10; $j++){
    echo '<tr><td align="center" style="width: 20px;">'.$j.'</td>';
    // Colonne
    for($i = 0; $i<=10; $i++){
        echo '<td align="center" style="width: 20px;">'.$j * $i.'</td>';
    }
    echo '</tr>';
 }

echo '</table>';