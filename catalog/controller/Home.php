<?php

class Home{

    protected $homeModel;

    public function __construct()
    {
        $this->homeModel = new HomeModel();
    }
    
    public function index(){
        $users = $this->homeModel->getData();
        $leaves = $this->homeModel->leaveType();
        $title = "Home";

        require_once './catalog/view/home.php';
    }

    public function saveData(){

        $array = [
            "name" => "data 1",
            "name" => "data 2",
            "name" => "data 3",
        ];

        $result = $this->homeModel->addData($array);

        if($result){
            echo "Success";
        }else{
            echo "Failed";
        }

    }
}

