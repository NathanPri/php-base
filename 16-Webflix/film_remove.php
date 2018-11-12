<?php
        // Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); 


// Connexion a BDD
require_once(__DIR__.'/config/database.php'); 




     //Tu recuperes l'id du contact
     $idFilm = $_GET["film_id"];
    //  var_dump($idFilm);


     //Requete SQL pour supprimer le contact dans la base
     $query = $db->prepare('DELETE FROM film WHERE idFilm =:idFilm');
     $query->bindValue(':idFilm', $idFilm, PDO::PARAM_STR);
     $query->execute();

     // renvoyer une 404 si la pizza n'existe pas
if($movie === false) {
    http_response_code(404); // network
    // on pourrait aussi rediriger l'utilisateur vers la page d'index
    header('location: .');
}

     ?>

     