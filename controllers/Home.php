<?php

class Home{
    public function homeView(){
       require './views/home-view.php';
    }
}

$home = new Home();
$home->homeView();