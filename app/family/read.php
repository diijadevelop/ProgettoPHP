<?php
require('../../vendor/autoload.php');
require('../../core/init.php');

use Core\Database\App;

$result = App::get('family')->read();
$num= $result->rowCount();
$data = [];
if($num>0){
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $tmp;
        $tmp['id'] = $row['id'];
        $tmp['name'] = $row['name'];
        $tmp['assigned_to'] = $row['assigned_to'];
        array_push($data, $tmp);
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
}else{
    // http_response_code(404);
    echo json_encode($data, JSON_PRETTY_PRINT);
}