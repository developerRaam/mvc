<?php 

class Router{
    private $controller = 'Home';
    private $method = 'index';

    public function __construct(){
        $request = $_SERVER['REQUEST_URI'];
        $url = str_replace('/mvc/', '/', $request);
        if(file_exists('controllers/' . $url . '.php')){
            require 'controllers/' . $url . '.php';
        }else{
            require 'controllers/' . $this->controller . '.php';
        }
    }
}