<?php

class Controller{
    public function loadController(string $string){
        require_once DIR_APPLICATION . $string;
        $string = explode('/', $string);
        $string = str_replace('.php', '', ucfirst($string[2]).'Controller');
        return new $string();
    }
}