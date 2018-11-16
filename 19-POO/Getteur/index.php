<?php
include "utils.php";
include "Personnage.php";




$spiderCochon = new Personnage("Super Coco", 3);

echo $spiderCochon->getName()."<br>";
echo $spiderCochon->getAge()."<br>";
echo "Couleur chemise : ".$spiderCochon->getShirtColor()."<br>";
$spiderCochon->setShirtColor("red");
echo "Couleur chemise : ".$spiderCochon->getShirtColor()."<br>";

