<?php


function autoload($class) {
    $class = preg_replace("/\\\/", "/", $class);
    include 'class/'.$class .'.php';
}
spl_autoload_register('autoload');



$text = new Chaine();
$chaine = "Hello World";

echo $text->set($chaine)->print()."<br>";
echo $text->set($chaine)->bold()->print()."<br>";
echo $text->set($chaine)->bold()->print()."<br>";
echo $text->set($chaine)->italic()->print()."<br>";
echo $text->set($chaine)->strike()->print()."<br>";
echo $text->set($chaine)->italic()->bold()->strike()->print()."<br>";