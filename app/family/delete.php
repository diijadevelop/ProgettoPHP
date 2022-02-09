<?php
require('../../vendor/autoload.php');
require('../../core/init.php');

use Core\Database\App;

$family = App::get('family');

    if(!empty($_POST['id'])){
        $id = $_POST['id'];
        $family->id = $id;
    
        if($family->delete()){
            echo json_encode([
                'message'=>'Record deleted correctly.',
                'response'=>1
            ]);
        }else{
            echo json_encode([
                'message'=>'Whoops, an error occurred.',
                'response'=>0
            ]);
        }
    }
    
