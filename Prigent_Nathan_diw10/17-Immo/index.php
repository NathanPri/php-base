<?php

$currentPageTitle = "L'immobilier de votre région";

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); 

// Afficher liste Bien add 
$query = $db->query('SELECT * FROM logement ORDER BY `titre`');
$immo_array = $query->fetchAll();
// var_dump($immo_array);

?>
    <main role="main" class="container">
        <h1 class="global-title"></h1>
        
        
       
        <p>1 011 400 annonces immobilières
        66 585 annonces en vente de moins de 7 jours</p>
        <br/>

    
<?php

       
// On affiche les Biens
foreach($immo_array as $immo){ ?>
             <div class="row">
                <div class="col-3 border">
           
                        <div class="card-img-top-container card-transparance"><br/>
                        <!-- Image -->
                        <img class="card-img-top car-img-top-zoom-effect taille" src="assets/<?php echo $immo['photo']; ?>"
                        alt="<?php echo $immo['titre']; ?>"></div>
                         <!-- Prix -->
                         <div><h5 class="card-title text-center">Prix : <?php echo substr($immo['prix'], 0, 10); ?> €</h5></div>
                       
                
                </div>
                <div class="col-7 border">
                        
                            <!-- titre -->
                        <br/><h5 class="card-title text-center"><?php echo $immo['titre']; ?></h5>
                        <!-- Description -->
                        <div class="espace">
                        <div class="card-title text-center"><h5></h5>
                        <h6 class="card-title"><?php echo $immo['description']; ?></h6></div> 
                        </div> 
                     
                </div>  
                <div class="col-2 border">
                       
                        <!-- Adresse -->
                    <br/><div><h6 class="card-title">Adresse : <br/><?php echo substr($immo['adresse'], 0, 10); ?></h6></div>
                    <div><h6 class="card-title">Ville : <?php echo substr($immo['ville'], 0, 10); ?></h6></div>
                    <div><h6 class="card-title">Code Postal : <?php echo substr($immo['cp'], 0, 10); ?></h6></div>
                    <div><h6 class="card-title">Surface : <?php echo substr($immo['surface'], 0, 10) ; ?> m2</h6></div>
                    <div><h6 class="card-title">Type : <?php echo substr($immo['type'], 0, 10) ; ?></h6></div>

                    
                </div>
            </div>




              
    <?php } ?>

</main> <!-- / Fin de contenair -->




<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>