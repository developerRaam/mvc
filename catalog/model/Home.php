<?php

class HomeModel{
    public function getData(){
        $data = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com'],
        ];
        
        return $data;
    }

    public function leaveType(){
        $data = [
            ['id' => 1, 'name' => 'Leave Application'],
            ['id' => 2, 'name' => 'Leave Details'],
            ['id' => 3, 'name' => 'Leave Balance'],
        ];

        return $data;
    }

    public function addData($array = array()){
        return true;
    }
    
}