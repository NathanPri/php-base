<?php
$currentPageTitle = 'Ajouter un Logement';

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

// Traitement du formulaire
$titre = $adresse = $ville = $cp = $surface = $prix = $photo = $type = $description =null;

// le formulaire est soumis
if (!empty($_POST)) {
    $titre = $_POST['titre'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $surface = $_POST['surface'];
    $prix = str_replace(',', '.', $_POST['prix']); // on remplace la , par un . pour le prix
    $photo = $_FILES['photo'];
    $type = $_POST['type'];
    $description = $_POST['description'];
   


    // var_dump($_FILES);

    // Définir un tableau d'erreur vide qui va se remplir après chaque erreur
    $errors = [];

    // Vérifier le titre
    if (empty($titre)) {
        $errors['titre'] = 'Le titre n\'est pas valide';
    }
    // Vérifier l' adresse
    if (empty($adresse)) {
        $errors['adresse'] = 'L\'adresse n\'est pas valide';
    }
    // Vérifier la ville
    if (empty($ville)) {
        $errors['ville'] = 'La Ville n\'est pas valide';
    }
     // Vérifier le CP
     if (empty($cp) ) {
        $errors['cp'] = 'Le code postal n\'est pas valide';
    }
    // Vérifier la Surface
    if (!ctype_digit($surface)) {
        $errors['surface'] = 'La surface n\'est pas valide';
    }

     // Vérifier la Prix
     if (!ctype_digit($prix)) {
        $errors['prix'] = 'Le Prix n\'est pas valide';
    }
     // Vérifier la Photo
     if ($photo['error'] === 4) {
        $errors['photo'] = 'La photo n\'est pas valide';
    }

     // Vérifier le type
     if (empty($type)) {
        $errors['type'] = 'Le type n\'est pas valide';
    }

    // Vérifier la description
    if (strlen($description) < 10) {
        $errors['adresse'] = 'La adresse n\'est pas valide';
    }

    // Upload de la Jacket
    // if(empty($errors)){
        // var_dump($image);
        
        $file = $photo['tmp_name']; // Emplacement du fichier temporaire
        $fileName = 'img/maison/'.$photo['name']; // Variable pour la Base de donnée
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // Permet d'ouvrir un fichier
        $mimeType = finfo_file($finfo, $file); // Ouvre le fichier et renvoi image/jpg
        $allowedExtensions =  ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        // Si l'extension n'est pas autorisé, il y a une erreur
        if(!in_array($mimeType, $allowedExtensions)){
            $errors['photo'] = 'Ce type de fichier n\'est pas autorisé';
        }
       
        // Verifier la taille du fichier
        // Le 3000 est defini en Ko
        if ($photo['size']/ 1024 > 5000){
            $errors['photo'] = 'L\'image est trop lourde';
        }

        if(!isset($errors['photo'])){
             move_uploaded_file($file,__DIR__.'/assets/'.$fileName); // On déplace le fichier temporaire uploadé ou on le souhaite. 
        }
    // }
// var_dump($errors); 
    // S'il n'y a pas d'erreurs dans le formulaire
    if (empty($errors)) {
        $query = $db->prepare('
            INSERT INTO logement (`titre`, `adresse`, `ville`, `cp`, `surface`, `prix`,  `photo`, `type`, `description`) VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)
        ');
        $query->bindValue(':titre', $titre, PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $query->bindValue(':ville', $ville, PDO::PARAM_STR);
        $query->bindValue(':cp', $cp, PDO::PARAM_STR);
        $query->bindValue(':surface', $surface, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':photo', $fileName, PDO::PARAM_STR);
        $query->bindValue(':type', $type, PDO::PARAM_STR);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        // var_dump($type);
        // var_dump($query);
        if ($query->execute()) { // On insère le nouveau Bien dans la BDD
            $success = true;
            // Envoyer un mail ?
            // Logger la création du nouvezau bien
        }
    }
}
            ?>
                          
<main class="container">
    <h1 class="page-title">Ajouter un nouveau Bien</h1>

    <?php if (isset($success) && $success) { ?>
        <div class="alert alert-success alert-dismissible fade show">
            Votre nouveau Bien <strong><?php echo $titre; ?></strong> a été correctement ajouté avec sont id <strong><?php echo $db->lastInsertId(); ?></strong> !
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    
    <form method="POST" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group"><br/>
                    <label for="titre">Titre :</label>
                    <input type="text" name="titre" id="titre" class="form-control <?php echo isset($errors['titre']) ? 'is-invalid' : null; ?>" value="<?php echo $titre; ?>">
                    <?php if (isset($errors['titre'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['titre'];
                        echo '</div>';
                    } ?>
                </div>
        
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" name="adresse" id="adresse" class="form-control <?php echo isset($errors['adresse']) ? 'is-invalid' : null; ?>" value="<?php echo $adresse; ?>">
                    <?php if (isset($errors['adresse'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['adresse'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" name="ville" id="ville" class="form-control <?php echo isset($errors['ville']) ? 'is-invalid' : null; ?>" value="<?php echo $ville; ?>">
                    <?php if (isset($errors['ville'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['ville'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="cp">Code Postal :</label>
                    <input type="text" name="cp" required minlength="4" maxlength="8" id="cp" class="form-control <?php echo isset($errors['cp']) ? 'is-invalid' : null; ?>" value="<?php echo $cp; ?>">
                    <?php if (isset($errors['cp'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['cp'];
                        echo '</div>';
                    } ?>
                </div>

                <div class="form-group">
                    <label for="surface">Surface :</label>
                    <input type="text" name="surface" id="surface" class="form-control <?php echo isset($errors['surface']) ? 'is-invalid' : null; ?>" value="<?php echo $surface; ?>">
                    <?php if (isset($errors['surface'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['surface'];
                        echo '</div>';
                    } ?>
                </div>

                  <div class="form-group">
                    <label for="prix">Prix :</label>
                    <input type="text" name="prix" id="prix" class="form-control <?php echo isset($errors['prix']) ? 'is-invalid' : null; ?>" value="<?php echo $prix; ?>">
                    <?php if (isset($errors['prix'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['prix'];
                        echo '</div>';
                    } ?>
                </div>
                </div><br/>
            
            <div class="col-md-6">
                <div class="form-group"><br/><br/><br/>
                    <label for="photo">Photos :</label>
                    <input type="file" name="photo" id="photo" class="form-control <?php echo isset($errors['photo']) ? 'is-invalid' : null; ?>" value="<?php echo empty($fileName) ? '' : $fileName; ?>">
                    <?php if (isset($errors['photo'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['photo'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group"><br/>
                    <div>
                    
                     <input type="radio" name="type" value="Maison" checked id="Maison" class="form-control <?php echo isset($errors['type']) ? 'is-invalid' : null; ?>" value="<?php echo $type; ?>">
                     <label for="Maison">Maison</label>
                     </div>
                     <div>
                    <input type="radio" name="type" value="Appartement" id="Appartement" class="form-control <?php echo isset($errors['type']) ? 'is-invalid' : null; ?>" value="<?php echo $type; ?>">
                    <label for="appartement">Appartement</label>
                    </div>
                    <?php if (isset($errors['type'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['type'];
                        echo '</div>';
                    } ?>
                     
                </div>

                <div class="form-group"><br/>
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" rows="5" class="form-control <?php echo isset($errors['description']) ? 'is-invalid' : null; ?>"><?php echo $description; ?></textarea>
                    <?php if (isset($errors['description'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['description'];
                        echo '</div>';
                    } ?>
                </div>
            </div>
                </div><br/>
               
                          
            <button class="btn btn-lg btn-block btn-danger text-uppercase font-weight-bold center">Ajouter</button>
    
    </form>
</main>

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>