<?php
require('../../vendor/autoload.php');
require('../../core/init.php');

use Core\Database\App;

$family = App::get('family');

$id = $_POST['id'];
$family->id = $id;

$name = $_POST['name'];
$family->name = $name;

if ($family->update()) {
    echo json_encode([
        'message' => 'Record updated correctly.',
        'response' => 1
    ]);
} else {
    echo json_encode([
        'message' => 'Whoops, an error occurred.',
        'response' => 0
    ]);
}
