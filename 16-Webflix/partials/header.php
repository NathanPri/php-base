<?php
// inclusion du fichier functions
require_once(__DIR__.'/../config/functions.php');
// Inclusion du fichier config
require_once(__DIR__.'/../config/config.php');
// Inclusion du fichier database
require_once(__DIR__.'/../config/database.php');
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    
    <!-- ????<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> -->
    
    
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
     <!-- Fichier CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <title>
    <?php 
    if(empty($currentPageTitle)){ // Si on est sur la page d'accueil

        echo $siteName. ' - WebFlix'; 
    } 
    else 
    { // SI on est sur une autre page 
        echo $currentPageTitle . ' - '. $siteName;

    }
    ?>
        
   
    </title>

    
  </head>
 
  <body>
  
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
      <a class="navbar-brand" href="index.php"><?php echo $siteName; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-webflix">
        <span class="navbar-toggler-icon"></span>
      </button>
       

      <div class="collapse navbar-collapse" id="navbar-webflix">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($currentPageUrl === 'index') ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item <?= ($currentPageUrl === 'film_add') ? 'active' : ''; ?>">
            <a class="nav-link" href="film_add.php">Ajouter un nouveau Film</a>
          </li>
        </ul>
      </div>
    </nav>
  </body>
  <main>