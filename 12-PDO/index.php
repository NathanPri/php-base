<?php

// On crée une connexion à la BDD
// $db = new PDO('mysql:host=localhost;dbname=pizzastore', 'root', '');
try{
    $db = new PDO('mysql:host=localhost;port=3306;dbname=pizzastore;charset=utf8', 'root', '');
} catch(Exception $e){
    echo $e -> getMessage();
//  Redirection en PHP vers google avec le message d'erreur concerné
    header('location: https://www.google.fr/search?q='.$e->getMessage());
}

// Permet de vérif que la connexion a la base fonction
var_dump($db);

// On crée une requête pr recup les pizzastore*
$query= $db->query('SELECT * FROM pizza');

// Pr récup une seule pizza
// $pizza = $query->fetch();
// var_dump($pizza);
// var_dump($query ->fetch());

// Pr récup TOUTES les Pizzas
// $pizzas = $query->fetchAll();
// var_dump($pizzas);

// Parcourir tt les pizzas avec le fetchALL (nom affiché avec h1)
$pizzas = $query->fetchAll();
foreach($pizzas as $pizza){
    echo '<h1>'.$pizza['name'].'</h1>';
}
$query = $db->query('SELECT * FROM pizza');

// Parcourir toutes les pizzas avec le fetch (Nom affiché dans un h1)
while ($pizza = $query->fetch()) {
    echo '<h1>'.$pizza['name'].'</h1>';
}