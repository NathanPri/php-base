# Pizza Store PDO SQL     
//(#genre h1)


<!-- QU est ce que l on doi faire dans ce projet pour utiliser le produit pr travailler dessus?-->

- Récupérer Back up de la BDD Pizzastore.
L'intéret est de pouvoir recréer la structure de la base à tout moment. 

Au niveau du PHP, on va crééer quelques fichiers/dossier :
-config/database.php -> Connexion à la abse de données en PDO sera incls dans tous les fichiers PHP. (configurations, acces BDD)
-partials/headder.php -> le header du site à inclure dans toute les pages (Bootstrap cdn)
-partials/footer.php -> le header du site à inclure dans toute les pages
-index.php -> La page d'accueil du site
-pizza_list.php -> Lister toutes les pizzas de la base de données
-pizza_single.php -> La page d'une pizza seule. 


Au niveau Front
-assets/ -> Dossier qui condiendra le css, le js, les images (en dur, pas le images de produits par ex)



<!-- Ajout d'une Pizza -->
-Creer la page pizza_add.php (Permettra d"ajouter une pizza côté admin)
-Ne pas oublier header footer
-ajouter un titre "ajoutrer une pizza"
-ajouter un formulaire avec le champs suivants :
    -Nom : libre
    -Prix : 5 a 19.99e
    -Image : libre
    -Description : libre 
    -Catégorie: select
    -Bouton
    -Faire le traitement du formulaire (vérifier les données)
    -Modifier la bdd pr ajouter le champ description et categ dans la table pizza
    -Ajouter Pizza dans la abse avec la requete