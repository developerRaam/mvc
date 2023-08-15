<?php 

class Router{
    private $controller = 'Home';
    private $method = 'index';

    public function __construct(){
        $request = $_SERVER['REQUEST_URI'];
        $request_url = str_replace('/mvc/', '', $request);
        
        $explodeUrl = explode('/',$request_url);
        $controllerName = ucfirst($explodeUrl[0]);
        
        $controllerFile = 'controllers/' . $controllerName . '.php';

        if(file_exists($controllerFile)){
            require $controllerFile;
            $controllerObj = new $controllerName(); // create object
            $method = isset($explodeUrl[1]) ? $explodeUrl[1] : $this->method;
            if (method_exists($controllerObj, $method)) {
                $controllerObj->$method();
            } else {
                $controllerObj->index();
            }
        }else{
            require 'controllers/' . $this->controller . '.php';
            $controllerObj = new $this->controller();
            $controllerObj->index();
        }

    }
}   