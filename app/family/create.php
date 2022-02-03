<?php
require('../../vendor/autoload.php');
require('../../core/init.php');

use App\Models\Family;
use Core\Database\App;

$family = new Family($pdo);
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $family->name = $name;
        var_dump($family->name);
    
        if($family->create()){
            echo json_encode([
                'message'=>'Record created correctly.',
                'response'=>1
            ]);
        }else{
            echo json_encode([
                'message'=>'Whoops, an error occurred.',
                'response'=>0
            ]);
        }
    }else{
        echo json_encode([
            'message'=>'The record cannot be empty.'
        ]);
    }
