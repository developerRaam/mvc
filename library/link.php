<?php

class Link{
    public function link(string $string){
        return HTTP_SERVER . $string;
    }
}