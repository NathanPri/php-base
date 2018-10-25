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
                    <span class="pastille">
                        <?php echo formatPrice($pizza['price']); ?> 
                    </span>
                <img class="card-img-top car-img-top-zoom-effect" src="assets/<?php echo $pizza['image']; ?>"
                 alt="<?php echo $pizza['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $pizza['name']; ?></h5>
                         <?php

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
      ?>                  
                        <!-- /  
                        Quand on clique sur le lien ,on doit se rendre sur pizza_single.php
                        L'url doit ressembler a pizza_single.php?id=IDDELAPIZZA
                         -->
                        <br/>
                        <a href="<?php echo 'pizza_single.php?id='.$pizza['id']; ?>" class="btn btn-danger">Commander</a>
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