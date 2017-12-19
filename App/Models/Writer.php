<?php 
namespace App\Models; 

class Writer extends User{

    public $table = "Article";

    public function displayAllArticles($condition){
        Parent::find($condition);
    }

    public function displayOneArticle($condition){
        Parent::find($condition);
    }

    public function addArticle($data){
        Parent::add($data);
    }

    public function editArticle($data){
        Parent::add($data);
    }

    public function deleteArticle($fields){
        Parent::add($fields);
    }
}