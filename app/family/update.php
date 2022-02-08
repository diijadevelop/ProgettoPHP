<?php
require('../../vendor/autoload.php');
require('../../core/init.php');

use App\Models\Family;
use Core\Database\App;

$family = App::get('family');

$name = $_POST['name'];
$id = $_POST['id'];

$family->name = $name;
$family->id = $id;

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
