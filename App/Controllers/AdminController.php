<?php
Namespace App\Controllers; 

class AdminController extends WriterController
{
    
    public function index(){
        $this->loadModel("Admin");
        $adminArticle =
        $this->Article->displayAllArticles();
        $this->set('article', $article);
        
    }

}