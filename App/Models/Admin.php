<?php
// page inutile ?

namespace App\Models; 

class Admin extends Writer{

    public $table = "User";

    public function addUser($data){
        Parent::add($data);
    }

    // modif user + modif status (activation & désactivation compte))
    public function editUser($data){
        Parent:edit($data);
    }

    public function deleteUser($fields){
        Parent::delete($fields);
    }

}