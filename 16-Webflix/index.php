<?php

$currentPageTitle = "Les Films de l'année";

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); 

// Afficher liste film add 
$query = $db->query('SELECT * FROM film ORDER BY `title`');
$film_array = $query->fetchAll();
// var_dump($film_array);

?>
    <main role="main" class="container">
        <h1 class="global-title"></h1>
        
        
       
        <p>Depuis quelques mois, tous les sites high-tech, 
        et même ceux qui sont beaucoup plus généralistes, 
        n'ont plus que ce mot à la bouche : Webflix. </p>
        <br/>
        <div class="row">
<?php

// On affiche les Films
foreach($film_array as $film){ ?>
        <div class="col-md-2">
            <div class="card mb-4">
                <div class="card-img-top-container ">
                <img class="card-img-top car-img-top-zoom-effect taille" src="assets/<?php echo $film['cover']; ?>"
                 alt="<?php echo $film['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film['title']; ?></h5>
                         <?php

                        if(!empty($_GET["film_id"]))
                    {
                        $film_id = $_GET['film_id'];
                        $result = $db->query('SELECT * FROM film WHERE id='.$film_id);
                        $film = $result->fetch();
                    
                        if($film){
                            echo '<h1>' .$film['idFilm']. ' / ' .$film['title']. '</h1>';
                        }else {
                            echo 'Ce Film n\'existe pas';
                        }
                    }
      ?>                  
                        <!-- /  
                        Quand on clique sur le lien ,on doit se rendre sur film_single.php
                        L'url doit ressembler a index.php?id=IDDEFILM
                         -->
                        <br/>
                        <a href="<?php echo 'film_single.php?film_id='.$film['idFilm']; ?>" class="btn btn-danger">Regarder</a>
                    </div>
                </div>
         </div> <!-- / Fin de col md 3 -->
    </div>
    <?php } ?>
</div>  <!-- / Fin de ROW -->
</main> <!-- / Fin de contenair -->




<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>