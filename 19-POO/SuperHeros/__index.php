<?php
require_once "Personnage.php";

$batman = new Personnage ("Batman", Personnage::MEDIUM);
$superman = new Personnage ("Superman", Personnage::NOVICE);

echo "<h1>".$batman->name." <i>vs</i> ".$superman->name."</h1>";
echo "<h3>".$batman->name."</h3>";
echo "<div>Point de vie : ".$batman->life."<div>";
echo "<div>Experience :".$batman->xp."</div>";



echo "<h3>".$superman->name."</h3>";
echo "<div>Point de vie : ".$superman->life."<div>";
echo "<div>Experience :".$superman->xp."</div>";

echo"<hr>";

echo "<h2>Début du Combat !</h2>";
echo "<div>".$batman->sayHello($superman)."</div>";
echo "<div>".$superman->sayHello($batman)."</div>";

echo "<div>Score: Batman ".$batman->life." / ".$superman->life." Superman</div>";

echo "<h3>Batman attaque Superman</h3>";
$batman->attack($superman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";

echo "<h3>Superman riposte : Attaque + SuperAttaque</h3>";
$superman->SuperAttack($batman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";

echo "<h3>Une SuperAttaque de Batman</h3>";
$batman->SuperAttack($superman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";

echo "<h3>Superman pleure sa mère ... et se soigne</h3>";
$superman->care($batman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";

echo "<h3>Batman tente une attaque secrète (mais... dans le vent).</h3>";
$batman->secretAttack($superman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";


echo "<h3>Superman (la tête dans le sac) se défend avec un double attaque... trop pitoyable:p.</h3>";
$superman->attack($batman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";
$batman->attack($superman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";

echo "<h3>Batman lance une simple attaque puis achève l'alien avec une attaque secrète</h3>";
$batman->attack($superman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";
$batman->secretAttack($superman);
echo "<div>Score : Batman ".$batman->life." / ".$superman->life." Superman </div>";


echo"<br><br><br><br><br><br><br><br><br><br><br><br><br>";