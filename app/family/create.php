<?php
require('../../vendor/autoload.php');
require('../../core/init.php');

use Core\Database\App;

$family = App::get('family');
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $family->name = $name;
    
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
