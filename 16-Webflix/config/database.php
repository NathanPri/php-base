<?php

try{
    $db = new PDO('mysql:host=localhost;port=3306;dbname=webflix;charset=utf8', 'root', '', [
    PDO :: ATTR_ERRMODE => PDO :: ERRMODE_WARNING, //Active les erreurs SQL,
    // On récupère tous les résultats en tableau associatif
    PDO :: ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_ASSOC,
    ]);
} catch(Exception $e){
    echo $e -> getMessage();
//  Redirection en PHP vers google avec le message d'erreur concerné
    // header('location: https://www.google.fr/search?q='.$e->getMessage());
    echo '<img src="assets/img/jhon-confused.gif" alt="Vous êtes perdus">';
    die('Stop'); // Arrête le script si la base de donnnée n'est pas dispo.
}

