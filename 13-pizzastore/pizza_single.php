<?php 
// Connexion a BDD
require_once(__DIR__.'/config/database.php'); 



// Recuperer Id dans URL

     // Recuperer l'ID de la Pizza dans l'url
    $pizza_id = intval($_GET['id']) ? $_GET['id'] : 0;
    // Recuperer infos sur pizza
    $result = $db->prepare('SELECT * FROM pizza WHERE id=:pizza_id');  //  :pizza_id est un paramètre
    $result->bindValue(':pizza_id',$pizza_id, PDO ::PARAM_STR ); // on s assure que l'id est bien un entier
    $result->execute(); // Execute la requête
    $pizza = $result->fetch();

    if($pizza === false){
        http_response_code(404);
        require_once(__DIR__.'/partials/header.php'); ?>
        <h1>404. Redirection dans 5 secondes ...</h1>;
        <script>
            setTimeout(function () {
                window.location = 'pizza_list.php';
            }, 5000);
        </script>
        <?php require_once(__DIR__.'/partials/footer.php');
        die();
    }

    $currentPageTitle = $pizza['name'];
    // Le fichier header.php est inclus sur la page
    require_once(__DIR__.'/partials/header.php'); ?>

    <main class="container">
        <div class='row'>
            <div class='col-md-6'>
            <img class="card-img-top card-img-fluid" src="assets/<?php echo $pizza['image']; ?>"
            alt="<?php echo $pizza['name']; ?>">
            </div>
            <div class='col-md-6 titre_single'>
                <h1><?php echo $pizza['name']; ?></h1><br/>
            <div class="container">
                <h4>DESCRIPTION</h4><br/> 
            <h6>Sauce barbecue, mozzarella, bacon, poulet rôti, oignons, tomates fraîches, oignons croustillants<h6>


        </div>
            </div>
        </div>
               
    </main>








    

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>