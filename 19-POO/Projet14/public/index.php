<?php
// include "Articles.php";
// include "Pages.php";
// include "Posts.php"; 
// include "Utilisateur.php"; 

// function autochargement($nomClass){
//     include_once $nomClass.'.php';
// }
// spl_autoload_register('autochargement');


function autoload_controllers($class) {
    $class = preg_replace("/\\\/", "/", $class);
    include_once '../private/'.$class .'.php';
}
spl_autoload_register('autoload_controllers');


function autoload_models($class) {
    $class = preg_replace("/\\\/", "/", $class);
    include_once '../private/'.$class .'.php';
}
spl_autoload_register('autoload_models');




use \Controllers\ArticleController as Article;
use \Controllers\UserController as User;


$articles = new Article;
$articles->viewAll();
// Prepare un tableau pr afficher (plus tard) tous les articles

// $articles=[];


  
// // On affiche tous les articles
// foreach ($articles as $article) {
//     echo "<h3>".$article->getTitle()."</h3>";
//     echo "<div>slug : ".$article->getSlug()."</div>";
//     echo "<div>author : ".$article->getUser()."</div>";
//     echo "<div>".$article->getContent()."</div>";
//     echo "<hr>";
// }