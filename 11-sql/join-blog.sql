Creer une base de données "blogjoin" dans PHPMYADMIN
Creer 2 tables articles et user
Dans articles, on aura un id, un titre, un auteur (Pourra être null)
Dans user, on aura un id et un nom

-----------------------------------------------------------------------

-- Left join : récupere tous les articles, anonyme ou non

SELECT * FROM articles
LEFT JOIN user ON article.author_id = user.id;

-- AUTRE FACON D ECRIRE avec alias :
-- SELECT * FROM articles alias
-- LEFT JOIN user u ON a.author_id = u.id;



-- Inner Join : recuperer les articles qui ne sont pas anonymes : 
SELECT * FROM article
INNER JOIN user ON article.author_id = user.id; 



-- Right join : récupère les (users) auteurs qui ont écrit ou pas un article 

SELECT * FROM article
RIGHT JOIN user ON article.author_id = user.id; 


-- Récupère les articles anonymes seulement 
SELECT * FROM article
LEFT JOIN user ON article.author_id = user.id
WHERE user.id IS NULL; 


-- Recupère les auteur qui n'ont pas écrit d 'articles 
SELECT * FROM article
RIGHT JOIN user ON article.author_id = user.id 
WHERE article.id IS NULL; 

SELECT phs.*, p.*, s.*, p.price+s.price as Prixtotal
                FROM pizza p 
                    INNER JOIN pizza_has_size phs ON phs.id = phs.id 
                    INNER JOIN size s ON phs.size_id = s.id 