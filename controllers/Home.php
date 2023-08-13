<?php

class HomeController{
    public function Home(){
        echo 'Home';
    }
}

$home = new HomeController();
$home->Home();