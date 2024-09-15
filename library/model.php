<?php

class Model{
    
    public function loadModel(string $string){
        require_once DIR_APPLICATION . $string;
        $string = explode('/', $string);
        $string = str_replace('.php', '', ucfirst($string[2]).'Model');
        return new $string();
    }
}