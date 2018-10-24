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