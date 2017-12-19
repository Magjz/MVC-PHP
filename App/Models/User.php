<?php
namespace App\Models; 

class User extends Model{
    //Class user générique qui aura 2 enfants, Writers(plus de methodes) et Admin(qui héritera
    //writer, avec encore plus de méthodes)

    public $table = "User";
 
    // public function __construct($data = null){
    //     Parent::__construct($data = null);
       
    
    // }

    public function subscribe($data){
        if($this->checkUser($this->data['email'], $this->data['password']) == false){
            Parent::add($data);
            return true;
        }
        else{
            return false;
        }
    }

    public function login(){
        $user = $this->checkUser($this-->data['email'], $this->data['password']);

        if($this->checkUser($this->data['email'], $this->data['password']))
        {
            $this->user = $user;
            // check if User is ban. If he's ban, return false (access denied) else return true (access granted).
           return ($this->checkStatus()) ? true : false;

        }
    }

    // check if User exists in database
    public function checkUser($email, $password){
        $q_base = $this->db->prepare('SELECT * FROM User WHERE email = :email');
        $q_base->execute(array(
            ':email' => $email 
        ));
         return $result = $q_base->fetch();
    }

    //check if User is ban. If he's ban, return true, else return false.
    public function checkStatus(){
        $q_base = $this->db->prepare('SELECT status FROM User WHERE email = :email');
        $q_base->execute(array(
            ':email' => $this->data['email']
        ));
        $userBan = $q_base->fetch();
        return ($userBan == 0) ? true : false;
    }

    //check if User is admin. If he's admin, return true, else return false.
    public function checkGroup(){
        $q_base = $this->db->prepare('SELECT group FROM User WHERE email = :email');
        $q_base->execute(array(
            ':email' => $this->data['email']
        ));
        return $q_base->fetch();
    }



    //delete his own account
    public function deleteUser($fields){
        Parent::delete($fields);
    }
}
