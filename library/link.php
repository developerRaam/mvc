<?php

class Link{
    public function route(string $string){
        return HTTP_SERVER . $string;
    }
}