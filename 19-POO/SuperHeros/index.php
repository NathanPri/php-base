<?php
include "Vehicules.php";

$ford = new Vehicules("Ford", "Ranger", "Noire", "Michel");
$toyota = new  Vehicules("Toyota", "Hillux", "Blanc", "Jean");
$dodge = new  Vehicules("Doge", "RAM 1500", "Rouge", "Janine");


// Démarrer les voitures 1 et 3
$ford->start();
$dodge->start();
echo "<div>Ford démarré? ".($ford->Moving ? "Oui": "Non") ."</div>";
echo "<div>Dodge démarré? ".($dodge->Moving ? "Oui": "Non") ."</div>";
echo "<div>Toyota démarré? ".($toyota->Moving ? "Oui": "Non") ."</div>";


// On fait avancer les voitures


$ford->Accelerate(50);
$dodge->Accelerate(30);
echo "<div>Vitesse de Ford : ". $ford->vitesse ."</div>";
echo "<div>Vitesse de Dodge : ". $dodge->vitesse ."</div>";



?>