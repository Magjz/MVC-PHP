<?php 
Namespace App\Core;

Require_once ('Core.php');
class Request{
    public $url; 

    public function __construct(){
        $this->url = $_SERVER['REQUEST_URI'];
    }

}