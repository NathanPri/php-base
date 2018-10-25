<?php

// Connexion a BDD
require_once(__DIR__.'/config/database.php'); 



// Recuperer Id dans URL

     // Recuperer l'ID de la Pizza dans l'url
    $pizza_id = intval($_GET['id']);
    // Recuperer infos sur pizza
    $result = $db->prepare('SELECT * FROM pizza WHERE id=:pizza_id');  //  :pizza_id est un paramètre
    $result->bindValue(':pizza_id',$pizza_id, PDO ::PARAM_STR ); // on s assure que l'id est bien un entier
    $result->execute(); // Execute la requête
    $pizza = $result->fetch();

    // var_dump($pizza);

    $currentPageTitle = 'Nos pizzas';
    // Le fichier header.php est inclus sur la page
    require_once(__DIR__.'/partials/header.php'); 
    
    ?>

    <main class="container">
        <div class='row'>
            <div class='col-md-6'>
            <img class="card-img-top car-img-top-zoom-effect" src="assets/<?php echo $pizza['image']; ?>"
            alt="<?php echo $pizza['name']; ?>">
            </div>
            <div class='col-md-6'>
                <h1><?php echo $pizza['name']; ?></h1>
            </div>
        </div>
               
    </main>








    

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>