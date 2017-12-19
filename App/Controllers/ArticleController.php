<?php
namespace App\Controllers;

class ArticleController extends Controller{


//MEthod pour afficher les derniers articles sur la page index.articles
    public function index()
    {
        $this->loadModel("Article");
        $article= $this->Article->displayAllArticles();
        $this->set('article', $article);
    }

    //Methode pour  afficher les categories dans la page category.articles
    public function category()
    {
     
    }

    //Method which displays one article by it's ID
    public function show($id)
    {
        $this->loadModel("Article");
        $article = $this->Article->displayOneArticle(array(
            'condition' => array('id' => $id)
        ));
       
        $this->set('article', $article);

      
    }

}

