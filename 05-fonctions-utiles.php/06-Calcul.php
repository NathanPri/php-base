<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Fonction calculant le carré d/un nombre</h1>
 
  <?php

    

   function carre($nbre) {
      
       return $nbre * $nbre;
   } 
    
   echo carre(12);
   echo '<br/>';
   echo carre(4);

   ?>
   <h1> Fonction calculant l'air d'un rectangle</h1>
   <?php

   function airRect($largeur, $longueur){
       return $largeur * $longueur;
   }

   echo airRect(12, 13);
   echo '<br/>';
   echo airRect(4, 6); 
   ?>

   <h1> Fonction calculant l'air d'un cercle</h1>
   <?php

   function airTri($rayon){
    $pi = pi();
    return ($pi*($rayon * $rayon));

   }

   echo airTri(6);
   echo '<br/>';
   echo airTri(9); 
    
   ?>

   <h1> Fonction calculant le prix TTC</h1>

   <?php

    function convert($prix, $taux, $prixFinal = true){
        if($prixFinal){
            return $prix * (1+ $taux/100);
    }
        return $prix / (1+ $taux/100);
    }
    // echo prixfinal(prixHT, Taux, "TTC" ) = Prix TTC
    //               (prix TTC, Taux, "HT") = Prix H.T
    echo convert(76 ,20 , false);  // La premiere valeur représente le prix. La seconde la valeur du taux. La derniere si la convertion se fait en H.T ou en T.T.C

   ?>


</body>
</html>