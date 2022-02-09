<?php
require('../../vendor/autoload.php');
require('../../core/init.php');

use Core\Database\App;

$family = App::get('family');

if ($family->truncateTable()) {
    echo json_encode([
        'message' => 'Record deleted correctly.',
        'response' => 1
    ]);
} else {
    echo json_encode([
        'message' => 'Whoops, an error occurred.',
        'response' => 0
    ]);
}
