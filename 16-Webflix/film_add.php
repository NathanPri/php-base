<?php
$currentPageTitle = 'Ajouter un Film';

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

// Traitement du formulaire
$title = $description = $video_link = $cover = $release_at = $Category_id = null;

// Liste des catégorie Affichage
$query = $db->prepare('SELECT * FROM `category`');
$query->execute();
$Category_array = $query->fetchAll();
// var_dump($Category_array);

// le formulaire est soumis
if (!empty($_POST)) {
    $title = $_POST['title'];
    $description = str_replace(',', '.', $_POST['description']); // on remplace la , par un . pour le prix
    $video_link = $_POST['video_link'];
    $cover = $_FILES['cover'];
    $release_at = $_POST['release_at'];
    $Category_id = $_POST['Category_id'];
    // Raccourci avec l'interpolation de variables
    // ${'variable'} = 'valeur';
    // $key = 'variable';
    // ${$key} = 'valeur';
    // foreach ($_POST as $key => $field) {
    //    $$key = $field;
    // }

    // var_dump($_FILES);

    // Définir un tableau d'erreur vide qui va se remplir après chaque erreur
    $errors = [];

    // Vérifier le titre
    if (empty($title)) {
        $errors['title'] = 'Le titre n\'est pas valide';
    }
    // Vérifier la description
    if (strlen($description) < 10) {
        $errors['description'] = 'La description n\'est pas valide';
    }
    // Vérifier le lien de la vidéo
    if (empty($video_link)) {
        $errors['video_link'] = 'Le lien de la vidéo n\'est pas valide';
    }
    // Vérifier la Jacket
    if ($cover['error'] === 4) {
        $errors['cover'] = 'La Jacket n\'est pas valide';
    }
    // Vérifier la Date de sortie
    if (!is_numeric($release_at) < 10) {
        $errors['release_at'] = 'La Date de sortie n\'est pas valide';
    }

     // Vérifier la categorie_id
    //  if (empty($Category_id)|| !in_array($Category_id, ['Classique', 'Spicy', 'Hot', 'Végétarienne', 'Calzone'])) {
        // $errors['Category_id'] = 'La catégorie n\'est pas valide';
    // }


    // Upload de la Jacket
    // if(empty($errors)){
        // var_dump($image);
        
        $file = $cover['tmp_name']; // Emplacement du fichier temporaire
        $fileName = 'img/films/'.$cover['name']; // Variable pour la Base de donnée
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // Permet d'ouvrir un fichier
        $mimeType = finfo_file($finfo, $file); // Ouvre le fichier et renvoi image/jpg
        $allowedExtensions =  ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        // Si l'extension n'est pas autorisé, il y a une erreur
        if(!in_array($mimeType, $allowedExtensions)){
            $errors['cover'] = 'Ce type de fichier n\'est pas autorisé';
        }
       
        // Verifier la taille du fichier
        // Le 3000 est defini en Ko
        if ($cover['size']/ 1024 > 3000){
            $errors['cover'] = 'L\'image est trop lourde';
        }

        if(!isset($errors['cover'])){
             move_uploaded_file($file,__DIR__.'/assets/'.$fileName); // On déplace le fichier temporaire uploadé ou on le souhaite. 
        }
    // }
// var_dump($errors); 
    // S'il n'y a pas d'erreurs dans le formulaire
    if (empty($errors)) {
        $query = $db->prepare('
            INSERT INTO Film (`title`, `description`, `video_link`, `cover`, `release_at`, `categorie_id` ) VALUES (:title, :description, :video_link, :cover, :release_at, :Category_id)
        ');
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        $query->bindValue(':video_link', $video_link, PDO::PARAM_STR);
        $query->bindValue(':cover', $fileName, PDO::PARAM_STR);
        $query->bindValue(':release_at', $release_at, PDO::PARAM_STR);
        $query->bindValue(':Category_id', $Category_id, PDO::PARAM_STR);

        if ($query->execute()) { // On insère le Film dans la BDD
            $success = true;
            // Envoyer un mail ?
            // Logger la création du nouvezau film
        }
    }
}
?>

<main class="container">
    <h1 class="page-title">Ajouter un Film</h1>

    <?php if (isset($success) && $success) { ?>
        <div class="alert alert-success alert-dismissible fade show">
            Le Film <strong><?php echo $title; ?></strong> a bien été ajouté avec sont id <strong><?php echo $db->lastInsertId(); ?></strong> !
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    
    <form method="POST" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" name="title" id="title" class="form-control <?php echo isset($errors['title']) ? 'is-invalid' : null; ?>" value="<?php echo $title; ?>">
                    <?php if (isset($errors['title'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['title'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" rows="5" class="form-control <?php echo isset($errors['description']) ? 'is-invalid' : null; ?>"><?php echo $description; ?></textarea>
                    <?php if (isset($errors['description'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['description'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="video_link">Lien vers la vidéo :</label>
                    <input type="text" name="video_link" id="video_link" class="form-control <?php echo isset($errors['video_link']) ? 'is-invalid' : null; ?>" value="<?php echo $video_link; ?>">
                    <?php if (isset($errors['video_link'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['video_link'];
                        echo '</div>';
                    } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cover">Jacket :</label>
                    <input type="file" name="cover" id="cover" class="form-control <?php echo isset($errors['cover']) ? 'is-invalid' : null; ?>" value="<?php echo empty($fileName) ? '' : $fileName; ?>">
                    <?php if (isset($errors['cover'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['cover'];
                        echo '</div>';
                    } ?>
                </div>
                    </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="release_at">Date de sortie :</label>
                    <input type="date" name="release_at" id="release_at" class="form-control <?php echo isset($errors['release_at']) ? 'is-invalid' : null; ?>" value="<?php echo $release_at; ?>">
                    <?php if (isset($errors['release_at'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['release_at'];
                        echo '</div>';
                    } ?>
                </div>
                    </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="Category_id">Catégorie :</label>
                    <!-- <option value="">Choisir la catégorie</option> -->
                    <select  name="Category_id" id="Category_id" class="form-control <?php echo isset($errors['Category_id']) ? 'is-invalid' : null; ?>">
                    <option value="">Choisir la catégorie</option>
                        <?php foreach($Category_array as $Category_row) { ?> 
                           <option <?php echo ($Category_id === $Category_row['id'] ? 'selected' : ''); ?> value="<?php echo $Category_row['id']; ?>"><?php echo $Category_row['name']; ?></option>
                        <?php } ?>
                       
                    </select> 
                    
                        <?php if(isset($errors['Category_id'])){
                        echo '<div class ="invalid-feedback">';
                        echo $errors['Category_id'];
                        echo '<div>';
                    } ?>   
                </div>
                </div>           
        <div class="text-center">
            <button class="btn btn-lg btn-block btn-danger text-uppercase font-weight-bold">Ajouter</button>
        </div>
    </form>
</main>

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>