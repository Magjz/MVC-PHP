<?php 
namespace App\Controllers;

Use App\Views\Components; 

class Controller{

    protected $viewPath = VIEWS;
    protected $vars = [];
  

    public function __construct($request = null)
    {
        $part = explode("\\", get_class($this));
        $part = end($part);
        $part= "/".str_replace('Controller', 's', $part)."/";
        $this->viewPath .= $part;
    }

    public function render($viewName)
    {
         if(file_exists($this->viewPath.$viewName.".php"))
       { 
            if($this->vars != null)
            {
                extract($this->vars);  
            }  
            require $this->viewPath.$viewName.".php";
       }
       else
       {
          $this->error404();
        exit;
       } 
    }

    public function set($key, $value)
    {   
        $this->vars[$key]=$value;      
    }


    public function checkParams($pattern, $param)
    {
        if(isset($param))
        {
            if(preg_match($pattern, $param))
            {
                return true; 
            }
            else
            {
                return false;
            }
        }
    }

    public function loadModel($model_name, $form = null)
    {
        $file = "App/Models/".$model_name;
        $file = str_replace("/", "\\", $file);  
        if(!isset($this->model_name)){
            $this->$model_name = new $file($form= null);
        }   
    }

    public function error404(){
        header('HTTP/1.0 404 Not Found');
        // $message = "Page introuvable";
        // $this->set('message', $message); 
        // $this->render("404.php");
    }





}