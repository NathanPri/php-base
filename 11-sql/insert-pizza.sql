-- Pizzeria :BDD 

-- -Pizzas -> (id), Nom, prix, image, taille_id(lien avec la table Taille),
-- -Taille ->(id), Nom, prix
-- -Utilisateur ->(id), Nom, Prénom
-- -Adresse ->(id), Nom, Adresse, Code psotal, Ville, Téléphone, user_id(lien avec la table utilisateur)

-- ----------------------------------------------------bonus

-- -Commande ->(id), user_id, ordered_at, Référence
-- -Détails Commandes -> (id), Prix

-- Liste des pizzas : 
-- -Reine (img/pizzas/reine.jpg), 8€
-- -Texan (img/pizzas/texan.jpg), 10€
-- -4 fromages (img/pizzas/4-fromages.jpg), 9€
-- - Vég (img/pizzas/vegetarienne.jpg), 11€
-- -Savoyarde (img/pizzas/savoyarde.jpg), 13€
-- -Bolognaise (img/pizzas/bolognaise.jpg), 10€
-- -Cannibale (img/pizzas/cannibale.jpg), 11€





--  On change le nom d 'une pizza en cas d erreur. 
UPDATE pizza SET name = 'Végératienne' WHERE id= 4;

-- Recuperer toutes les pizzas
SELECT * FROM pizzastore.pizza;

-- Recuperer les pizzas dont le pric est inf a 10
SELECT * FROM pizzastore.pizza WHERE price <10;

-- Rrecuperer les pizzas qui n'ont pas d'images
SELECT * FROM pizzastore.pizza WHERE image IS NULL;

-- Trier les pizzas de la plus cher a la moins cher 
SELECT * FROM pizzastore.pizza ORDER BY price DESC;

-- Recuperer 3 pizzas dans ordres aléatoire
SELECT * FROM pizzastore.pizza ORDER BY RAND () LIMIT 0,3;

-- Compter le nombre de Pizza disponible
SELECT COUNT(id) FROM pizzastore.pizza;

-- Récuperer la pizza la plus cher 
SELECT * FROM pizza ORDER BY price DESC LIMIT 1;
-- recuperer TOUTES LES PIZZAS les plus chers :
SELECT * FROM pizza WHERE price = (SELECT MAX(price) FROM pizza);

-- Calculer la moyenne de prix des pizzas
SELECT AVG(price) FROM .pizza;



