<?php
require_once "Personnage.php";
$personnage = new Personnage();

// Accéder à une méthode
     "<div>".$personnage->direbonjour("Claire")."</div>";
     "<div>".$personnage->direbonjour("Doug")."</div>";
     "<div>".$personnage->direAurevoir()."</div>";

     echo "<div>".Personnage::ONE."</div>"; //ou echo "<div>".$personnage::ONE."</div>";   
     echo "<div>".Personnage::FOO."</div>";  //ou echo "<div>".$personnage::FOO."</div>"
    // var_dump($personnage);


    // Creation de l'instance (formule sans valeurs)
    $bob = new Personnage(2);
    $alice = new Personnage(10);