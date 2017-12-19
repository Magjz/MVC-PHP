<?php
namespace App\Models;

use App\Views\Components; 

class Model
{

        protected $table;
        protected $id;
        protected $data = array();
       

        public function __construct($data = null)
        {
            $this->db = Database::getInstance();
            $this->data = $data;
        }
    
        // Model display
        public function find($cond = array())
        { 
            if(isset($cond['fields']) && $cond['fields'] != null)
            { 
                $fields = $cond['fields']; 
            }else{
                $fields = "*";
            }
            $sql = "SELECT " . $fields. " FROM " . $this->table;
            if(isset($cond['conditions']) && $cond['conditions'] != null)
            { 
                $condition = $cond['conditions'];
                $sql .= "WHERE";
                foreach($cond['conditions'] as $k => $v){
                    $sql .= $k . "=" . $v;
                }
            } 
            else{
                $condition = "1=1";
            }

            $req = $this->db->prepare($sql);
            var_dump($fields);
            $req->execute();
     
            return $result = $req->fetchAll();
          
       
            $req->closeCursor();
        }
    
        // Model create
        public function add($data)
        {
           $sql = "INSERT INTO :table (";
            foreach($data as $k => $v){
                $sql .= "'" . $k . "',";
            }
            $sql = substr($sql, 0, -1);
            $sql .= ") VALUES (";
            foreach($data as $k => $v){
                $sql .= "'".$v."',";
            }
            $sql .= substr($sql, 0, -1);
            $sql .= ")";

            $q_base = $this->db->prepare($sql);
            $q_base->execute(array(
                ':table'=> $table
            ));
                
        }
        
    
        // Model edit
        public function edit($data)
        {
           
            $sql = "UPDATE :table SET";
            foreach($data as $k => $v)
            {
                $sql .= "$data[$k] =$v";
            }
            $sql = substr($sql, 0, -1);
            $sql .= "WHERE id= :id";

            $q_base = $this->db->prepare($sql);
            $q_base->execute(array(
                ':table'=>$this->table,
                ':id' => $data['id']
            ));
        }
    
        // Model delete
        public function delete($fields)
        {
            $sql = "DELETE FROM :table WHERE id = :id";
            $req = $this->db->prepare($sql);
            $req->execute(array(
                ':table'=>$this->table,
                ':id'=>$this->id
            ));
        }
    
    }
    

