<?php 
Namespace App\Core; 

Class Dispatcher
{
    protected $request; 
    protected $vars = array();
 
    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request); 
    
        $controller = $this->loadController();
        if(method_exists($controller, $this->request->action))
        { 
            call_user_func_array(array($controller, $this->request->action), $this->request->params);
            $controller->render($this->request->action); 
        }
        else
        {
            $this->error404();
            // redirect to 404.php if created 
        }
         
    }
/**
 * Load the right controller at the right time
 */
    public function loadController()
    {
        $name = "App/Controllers/".$this->request->controller."Controller";
        $file = ROOT.DS.$name.".php";
        if(!file_exists($file))
        {
            $this->error404();
        }else
            require_once $file;
        
            $convertAutoload = str_replace("/", "\\", $name);           // Convertie le nom du controller avec le namespace pour l'autoload
            
        if(class_exists($convertAutoload))
        {
            $controller = new $convertAutoload($this->request); // Instancie un nouveau controller à partir de la variable
            return $controller;
        }
        else
            return null;       
    }

    public function error404(){
        header('HTTP/1.0 404 Not Found');
    }

 

}

    
    
    
 