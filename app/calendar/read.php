<?php
use Core\Database\App;

require('../../vendor/autoload.php');
require('../../core/init.php');

$select = App::get('calendar')->read();
$num = $select->rowCount();
$data=[];
if($num>0){
    while($row=$select->fetch(PDO::FETCH_ASSOC)){
    $tmp;
    $tmp['id']=$row['id'];
    $tmp['day']=$row['day'];
    $tmp['assigned_user']=$row['assigned_user'];
    $tmp['assigned_garbage']=$row['assigned_garbage'];
    array_push($data, $tmp);
} echo json_encode($data, JSON_PRETTY_PRINT);
}else{
    echo json_encode($data, JSON_PRETTY_PRINT);
}