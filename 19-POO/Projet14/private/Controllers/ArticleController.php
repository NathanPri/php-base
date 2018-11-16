<?php

namespace Controllers;

   use \Models\ArticleModel;


class ArticleController extends Post
 {
    const TYPE = "article";

    //Propriétés $articles
    //Tableau de la liste des article

    private $articles = [];
    private $model;
   /**
    * Boucle sur la liste des articles et les affiches
    */
    public function __construct()
    {
       $this->model = new ArticleModel;

      //  var_dump($this->model->getAll());
    }

    public function viewAll()
    {
       
         foreach ($this->articles as $article) {

         }
    }
 } 
    
