
<?php

// Connexion a BDD
require_once(__DIR__.'/config/database.php'); 



// Recuperer Id dans URL

     // Recuperer l'ID du film dans l'url
    $id = intval($_GET['id']) ? $_GET['id'] : 0;
    // Recuperer infos sur le film
    $result = $db->prepare('SELECT * FROM film WHERE id_logement=:id');  //  :film_id est un paramètre
    $result->bindValue(':film_id',$film_id, PDO ::PARAM_STR); // on s assure que l\'id est bien un entier
    $result->execute(); // Execute la requête
    $film = $result->fetch();

     if($film === false){
         http_response_code(404);
         require_once(__DIR__.'/partials/header.php'); ?>
         <h1>404. Redirection dans 5 secondes ...</h1>; 
         <script>
             setTimeout(function () {
                 window.location = 'film_list.php';
            }, 5000);
        </script>
         <?php require_once(__DIR__.'/partials/footer.php');
         die();
     }

    $currentPageTitle = $film['titre'];
    // Le fichier header.php est inclus sur la page
    require_once(__DIR__.'/partials/header.php'); ?>

   
   <h1 class="margin"><?php echo $film['titre']; ?></h1><br/>
        
        <div class="row">
            <div class="col-sm-3"><img class="card-img-top mini card-img-fluid" src="assets/<?php echo $film['photo']; ?>"
            alt="<?php echo $film['photo']; ?>"></div>
            <div class="col-sm-5 "><h4>Description du bien</h4><br/> 
            <br/><h6 class="card-title"><?php echo $film['description']; ?></h6><br/> <br/>
            <h5 class="card-title">Adresse : <?php echo substr($film['adresse'], 0, 10); ?></h5>
            </div>
            <div><h5 class="card-title">Ville : <?php echo substr($film['ville'], 0, 10); ?></h5></div>
            <div><h5 class="card-title">Code Postal : <?php echo substr($film['cp'], 0, 10); ?></h5></div>
            <div><h5 class="card-title">Surface : <?php echo substr($film['surface'], 0, 10); ?></h5></div>
            <div><h5 class="card-title">Prix : <?php echo substr($film['prix'], 0, 10); ?></h5></div>
            
            </div>

       </div>

        <p><a href="film_remove.php?film_id=<?php echo $film_id; ?>"><INPUT TYPE=SUBMIT VALUE='supprimer' NAME='supprimer' ></a></p>






    

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>