<?php
use Core\Database\App;

require('../../vendor/autoload.php');
require('../../core/init.php');

$calendar = App::get('calendar');

$assigned_user=$_POST['assigned_user'];
$assigned_garbage=$_POST['assigned_garbage'];
$id=$_POST['id'];

$calendar->assigned_user = $assigned_user;
$calendar->assigned_garbage = $assigned_garbage;
$calendar->id = $id;

if($calendar->update()){
    echo json_encode(
       [ 'message' => 'Update Executed.',
        'response' => 1]
    );
}else{
    echo json_encode(
        [ 'message' => 'Update Failed.',
         'response' => 0]
     );
}