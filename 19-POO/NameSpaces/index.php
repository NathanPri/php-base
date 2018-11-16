<?php



// MaClass sue trouve dans le Namespace Global
class MaClass {
    public function maMethode()
    {
        echo "Je suis \"maMethode()\" de \"MaClass\".<br>";
    }
}

$monObjet1 = new MaClass;
$monObjet1->maMethode();