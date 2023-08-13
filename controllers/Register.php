<?php

class Register{
    public function registerView(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
        }
       require './views/register-view.php';
    }
}

$home = new Register();
$home->registerView();