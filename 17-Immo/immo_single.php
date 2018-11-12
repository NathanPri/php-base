
<?php

// Connexion a BDD
require_once(__DIR__.'/config/database.php'); 



// Recuperer Id dans URL

     // Recuperer l'ID du immo dans l'url
    $id = intval($_GET['id']) ? $_GET['id'] : 0;
    // Recuperer infos sur le immo
    $result = $db->prepare('SELECT * FROM logement WHERE id_logement= :id');  //  :immo_id est un paramètre
    $result->bindValue(':immo_id',$immo_id, PDO ::PARAM_STR); // on s assure que l\'id est bien un entier
    $result->execute(); // Execute la requête
    $immo = $result->fetch();

     if($immo === false){
         http_response_code(404);
         require_once(__DIR__.'/partials/header.php'); ?>
         <h1>404. Redirection dans 5 secondes ...</h1>; 
         <script>
             setTimeout(function () {
                 window.location = 'immo_list.php';
            }, 5000);
        </script>
         <?php require_once(__DIR__.'/partials/footer.php');
         die();
     }

    $currentPageTitle = $immo['titre'];
    // Le fichier header.php est inclus sur la page
    require_once(__DIR__.'/partials/header.php'); ?>

   
   <h1 class="margin"><?php echo $immo['titre']; ?></h1><br/>
        
        <div class="row">
            <div class="col-sm-3"><img class="card-img-top mini card-img-fluid" src="assets/<?php echo $immo['photo']; ?>"
            alt="<?php echo $immo['photo']; ?>"></div>
            <div class="col-sm-5 "><h4>Description du bien</h4><br/> 
            <br/><h6 class="card-title"><?php echo $immo['description']; ?></h6><br/> <br/>
            <h5 class="card-title">Adresse : <?php echo substr($immo['adresse'], 0, 10); ?></h5>
            </div>
            <div><h5 class="card-title">Ville : <?php echo substr($immo['ville'], 0, 10); ?></h5></div>
            <div><h5 class="card-title">Code Postal : <?php echo substr($immo['cp'], 0, 10); ?></h5></div>
            <div><h5 class="card-title">Surface : <?php echo substr($immo['surface'], 0, 10) m2; ?></h5></div>
            <div><h5 class="card-title">Prix : <?php echo substr($immo['prix'], 0, 10)€; ?></h5></div>
            
            </div>

       </div>

        <p><a href="immo_remove.php?immo_id=<?php echo $immo_id; ?>"><INPUT TYPE=SUBMIT VALUE='supprimer' NAME='supprimer' ></a></p>






    

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>