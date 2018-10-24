<?php
    $eleves = [
        0 => [
            'nom' => 'Matthieu',
            'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
        ],
        1 => [
            'nom' => 'Thomas',
            'notes' => [4, 18, 12, 15, 13, 7]
        ],
        2 => [
            'nom' => 'Jean',
            'notes' => [17, 14, 6, 2, 16, 18, 9]
        ],
        3 => [
            'nom' => 'Enzo',
            'notes' => [1, 14, 6, 2, 1, 8, 9]
        ]
    ];


// exemple : 
// echo $eleves[2]['nom'];
// echo $eleves[2]['notes'][2];
// $eleves = ['Matthieu', 'Thomas', 'Jean', 'Enzo' ];

// foreach ($eleves as $value)
// {
//     echo $value.'</br>';  //Affiche un par un le prenom des eleves (value)
// }

// var_dump($eleves);




    // Affiche la liste de tous les eleves avec leur notes
    foreach($eleves as $valueeleves){
        echo $valueeleves['nom']." a eu ";

        // Nombre de notes (calculer la taille du tableau)
        $notesCount = count($valueeleves['notes']);

        // Parcourir toutes les notes de l'éléves
        foreach($valueeleves['notes'] as $key => $valuenotes){
            echo $valuenotes;

            // Si la note est la derniere
            if($key == ($notesCount - 1)){
                echo '.';
                //Si la note est l'avant dernière
            } else if ($key == ($notesCount -2)){
                echo ' et ';
                // Sinon (le reste)
            } else {
                echo ', ';
            }
        }
            $moyenneEleves = round(array_sum($valueeleves['notes'])/count($valueeleves['notes']), 2);
            echo'<br />';
            echo 'Sa moyenne est de '. $moyenneEleves;
            echo'<br />';
    }


// Exercice 5 Qui a eu au moins un 20?

    $Aeuvingt = false;
    foreach($eleves as $valueeleves){
        foreach($valueeleves['notes'] as $valuenotes) {
            if (20 === $valuenotes){
                $Aeuvingt = true;
                break 2;
                var_dump('ici');
            }
        }
        // break;
        var_dump('là');
    }

    if($Aeuvingt){
        echo'<br />';
        echo 'Quelqu\'un à eu 20';
    } else {
        echo 'Personne n\'à eu 20';
    }

    
   

//   Exercice6
// $notes = [4, 25, 1, 36, 24]; => [1, 4, 24, 25, 36];
