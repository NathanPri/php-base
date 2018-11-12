Webflix

On vx creer un nouveau NetFlix

Projet : 
-Creer un dépot GitHub.
-Faire le lien entre le dépot Local
-Penser à la BDD ..

Pages: 

<!-- PARTIE 1 --> SI fini mercredi OK EVAL
-Accueil(index.php) -> Liste de Films triée par catégorie 

-Voir un film (movie_single.php?id=4) -> On peut voir un film 
-Ajouter un film (movie_add.php?id=4) -> On peut ajouter un film dans BDD

<!-- PARTIE 2 --> SI fini, ok pr EVAL
-Modifier un film (movie_edit.php?id=4) -> On peut modifier un film dans la bdd.
-Supprimer un film(movie_delete.phpid=4) -> On peux supprimer un film dans la BDD. On doit avoir un bouton supprimer sur la liste des films, on clique, on supprime le film en question et on revient sur la liste des films.
-Film random (movie_random.php) -> On affiche 4 films de manière aléatoire


<!-- PARTIE 3 -->
-Inscription (register.php) -> Formulaire d'inscription(email, username, mdp, cofirmer le mdp)
-Connexion (login.php) -> Formulaire de connexion(email, mdp)

<!-- PARTIE 4 -->
-Les pages Voir, Ajouter, Modifier, Supprimer un film ne sont accessible que par quelqu'un qui est connecté; 

<!-- PARTIE 5 -->
-MDp oublié (remember_me.php) -> 1er formulaire ou on saisit notre email, s'il existe, on envoie un lien à l'utilisateur par mail pour redefinir son mdp. Ce lien doit être unique et accessible pdt 24h.(sinon 404). Si le lien est valide, on arrive sur un 2eme formulaire ou on redefinit son mot de passe(mdp, confirmer mdp) -->




Fonctionnalités :

Structure :

BDD:
-Movie :  id, title, description, video_link, release_at, category_id

-Catégory:  id, name, 

-User : id, username, email, token, token_expiration