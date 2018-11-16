<?php
namespace Models;

class ArticleModel{

//Stock l'instance de PDO
private $db;

public function __construct()
{

    var_dump( get_called_class() );


    //INstance PDO
    try {
        $this->db = new \PDO("mysql:host=localhost; dbname=projetpoo;host=127.0.0.1", "root", "", [
        \PDO :: ATTR_ERRMODE => \PDO::ERRMODE_WARNING, 
        \PDO :: ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ]);
    } catch (\Exception $e)
    {
        echo 'Connexion échouée : ' .$e->getMessage();
    }
}

// List/Retrieve All
public function getAll()
{
    $query = $this->db->query("SELECT * FROM article");
    return $query->fetchAll();
}

// C-Create
public function create()
{

}
// R-Read
public function getOne()
{

}

// U-Update
public function update()
{

}

// D-Delete
public function delete()
{

}

}