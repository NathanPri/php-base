<?php

$currentPageTitle = "Nos pizzas";

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); 

$query = $db ->query('SELECT * FROM pizza order by id DESC');
$pizzas = $query->fetchAll();   
?> 



<main class="container">
<h1 class="page-title">La liste de nos Pizzas</h1>    
<div class="row">
<?php

// On affiche les Pizzas
foreach($pizzas as $pizza){ ?>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-img-top-container ">
                    <div class="pastille"><?php echo $pizza['price']; ?> €</div>
                <img class="card-img-top car-img-top-zoom-effect" src="assets/img/tomates.jpg" alt="<?php echo $pizza['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $pizza['name']; ?></h5>
                        <br/>
                        <a href="#" class="btn btn-danger">Commander</a>
                    </div>
                </div>
         </div> <!-- / Fin de col md 3 -->
    </div>
    <?php } ?>
</div>  <!-- / Fin de ROW -->
</main> <!-- / Fin de contenair -->

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); 
?>