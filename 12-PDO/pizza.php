<?php

// ON crée une connexion à la BDD

try{
    $db = new PDO('mysql:host=localhost;port=3306;dbname=pizzastore;charset=utf8', 'root', '', [
    PDO :: ATTR_ERRMODE => PDO :: ERRMODE_WARNING, //Active les erreurs SQL,
    // On récupère tous les résultats en tableau associatif
    PDO :: ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_ASSOC,

    ]);
} catch(Exception $e){
    echo $e -> getMessage();
//  Redirection en PHP vers google avec le message d'erreur concerné
    header('location: https://www.google.fr/search?q='.$e->getMessage());
}



    // 1 Ecrire la requete qui permet de recup pizza avec l'id 3

    // 2 Récup l'id dynamiquement a partir de L'url
    // Ex: Si je saisis pizza.php?id=7, je dois récuperer la pizza avec l'id 7

    if(!empty($_GET["pizza_id"]))
    {
        $pizza_id = $_GET['pizza_id'];
        $result = $db->query('SELECT * FROM pizza WHERE id='.$pizza_id);
        $pizza = $result->fetch();
    
        if($pizza){
            echo '<h1>' .$pizza ['id']. ' / ' .$pizza['name']. '</h1>';
        }else {
            echo 'La Zazza n\'existe pas';
        }
    }
        // else {
            // echo 'L\'identifiant de la pizza n\'est pas rempli';
        // }