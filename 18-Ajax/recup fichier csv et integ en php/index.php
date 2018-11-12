<?php

    try{
        $db = new PDO('mysql:host=localhost;port=3306;dbname=csvtojsontophp;charset=utf8', 'root', '');
        if($db){
            echo "Vous êtes connecté";
        }
        else
        {
            echo "Vous n'êtes pas connecté";
        }
    } 
    catch(Exception $exception)
    {
        echo $exception->getMessage();
    //  Redirection en PHP vers google avec le message d'erreur concerné
        // header('location: https://www.google.fr/search?q='.$exception->getMessage());
    }

?>

<h1>Recupération du fichier data.csv</h1>

<?php
    // Récupération du fichier data.csv
    $donnee_contenu = file_get_contents('data.csv');
    // var_dump($donnée_contenu);

    // Mis en page du fichier data.csv (preparation)
    $array_contenu = explode("\n",$donnee_contenu);
    var_dump($array_contenu);

?>
    
<h1> Decomposition du fichier en groupement</h1>

<?php

    foreach($array_contenu as $ligne)
    {
        $array_ligne = explode(";",$ligne);
        // var_dump($array_ligne);
    
        $users = $array_ligne[0];
        $firstname = $array_ligne[1];
        $email = $array_ligne[2];
    
        
        $query = $db->prepare('INSERT INTO user (`users`, `firstname`, `email`) VALUES (:users, :firstname, :email)');
        $query->bindValue(':users', $users, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);

        if ($query->execute()) 
        { // on insere les lignes dans bdd
            echo "Insertion Ok dans BDD";
            $success = true;
            // Envoyer un mail ?
            // Logger la création de la pizza
        }
    
    
}
    
 ?>
