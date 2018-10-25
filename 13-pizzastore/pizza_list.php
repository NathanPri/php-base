<?php

$currentPageTitle = "Nos pizzas";

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); ?>

    <main role="main" class="container">
        <h1>Mon Pizza Store WebSite</h1>
    </main>
<?php

$query = $db ->query('SELECT * FROM pizza order by id DESC');

$pizzas = $query->fetchAll();
foreach($pizzas as $pizza){
    echo '<hr>';
    echo '<h2>'.$pizza['name'].'</h2>';
}


?>


<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>