<?php
require __DIR__ .'/partials/header.php'; ?>



<form method="POST">
<h1>Formulaire de contact</h1>
<br />
<label type="text" for="nom"></label>Votre nom : <input type="text" name="nom" id="nom" placeholder=""/><br />
<br />
<label type="text" for="email"></label>E-mail* : <input type="text" name="email" id="email" placeholder="votre e-mail"/><br />
<br />
<label type="text" for="sujet"></label>Sujet : <input type="text" name="sujet" id="sujet" placeholder=""/><br />
<br />
<label type="text" for="message">Message :</label><br />
<textarea  type="text" for="message" name="message" id="message"></textarea><br />
<br />
<button type="submit" id="calcul" class="btn btn-primary">Envoyer</button>
</form>


<?php
if(!empty($_POST["nom"])) 
{
        // Reinitialisation des SUPERVARIABLES  
    $nom = null;
    $email = null;
    $sujet = null;
    $message = null;

    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    
    if(strlen($nom) < 2){
        echo("Votre nom est trop court");
        exit();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("L'email semble invalide");
        exit();
    }
    if(strlen($sujet) < 2) {
        echo("L'email semble invalide");
        exit();
    }
    if(strlen($message) <= 14) {
        echo("Le message semble trop court");
        exit();
    }
    echo "le mail est bien envoyé !";
    mail($email, $sujet, $nom."<br />".$message);
}



?>


<?php
require __DIR__ .'/partials/footer.php'; ?>