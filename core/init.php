<?php
use Core\Database\Connection;
use Core\Database\App;
use Core\Database\QueryBuilder;
use App\Models\Family;

App::bind('config', require 'config.php');

$pdo = Connection::make(App::get('config')['database']);

App::bind ('family', new Family($pdo));
App::bind ('database', new QueryBuilder($pdo));

// App::bind ('family', new Family(
//     Connection::make(App::get('config')['database'])
// ));

// App::bind ('database', new QueryBuilder(
//     Connection::make(App::get('config')['database'])
// ));



function view($name, $data=[])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}