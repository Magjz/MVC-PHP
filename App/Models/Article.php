<?php
Namespace App\Models;

class Article extends Model{
    
    public $table = "Article";

    public function displayAllArticles($cond = null){
        $sql = "SELECT " . $this->table . ".*, User.name FROM " . $this->table . " INNER JOIN User ON " . $this->table . ".writer_id = User.id";
        $req = $this->db->prepare($sql);
        $req->execute();
        return $result = $req->fetchAll();
    }

    public function displayFiveLastArticles($condition){
        Parent::find($condition);
    }

    public function displayOneArticle($condition){
        if(isset($condition['condition'])){
            $id = $condition['condition']['id'];
        }
        $sql = "SELECT " . $this->table . ".*, User.name FROM " . $this->table . " INNER JOIN User ON " . $this->table . ".writer_id = User.id";
        $q_base = $this->db->prepare($sql);
        $q_base->execute(array( 
            ':id' => $id
        ));
       return $result = $q_base->fetch();
       
    }
}