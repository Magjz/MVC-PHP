<?php 
// Namespace App\Models; 

// Class Model{
//     public $db = "default";
//     public $table; 

//     public function __construct()
//     {
//         $this->db = Database::getInstance();
//         // if($this->table === false){
//         //     $this->table = get_class($this);
//         // }
//     }

//     public function display($condition = null){
//         $sql = "SELECT * from :table";
//         if(isset($condition['conditions'])){
//             $sql .= "WHERE :condition";
//         }
//         $q_base = $this->db->prepare($sql);
//         $q_base->execute(array(
//             ':table' => $this->table, 
//             ':condition' => $condition['conditions']
//         ));
//         return $q_base->fetchAll(\PDO::FETCH_OBJ);
//     }

//     public function displayFirst($condition = null){
//         return current($q_base->fetchAll(\PDO::FETCH_OBJ));
    }



}