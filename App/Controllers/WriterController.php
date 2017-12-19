<?php 
Namespace App\Controllers; 

class WriterController extends UserController{
    
    public function index(){
        $this->loadModel("Article");
        $wArticle =
        $this->Article->displayAllArticles();
        $this->set('article', $wArticle);
    }

    public function show($id){
        $this->loadModel("Article");
        $article = $this->Article->displayOneArticle(array(
            'condition' => array('id' => $id)
        ));
    
        $this->set('article', $article);
    }

    public 
}