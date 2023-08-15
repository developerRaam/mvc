<?php

class Register{
    public function read(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
        }
       require './views/register-view.php';
    }
}