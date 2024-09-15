<?php

class HomeController {

    protected $model;
    protected $controller;
    protected $link;

    public function __construct()
    {
        $this->model = new Model();
        $this->controller = new Controller();
        $this->link = new Link();
        
    }
    
    public function index(){
        $model = $this->model->loadModel('/model/home.php');
        $action = $this->link->route('/home/saveData');

        $users = $model->getData();
        $leaves = $model->leaveType();

        require_once './catalog/view/home.php';
    }

    public function saveData(){
        print_r($_POST);

    }
}

