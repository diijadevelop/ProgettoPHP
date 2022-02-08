<?php
use Core\Database\Connection;
use Core\Database\App;
use App\Models\Family;
use App\Models\Calendar;
use App\Models\Garbage;

App::bind('config', require 'config.php');

$pdo = Connection::make(App::get('config')['database']);

App::bind ('family', new Family($pdo));
App::bind ('calendar', new Calendar($pdo));
App::bind ('garbage', new Garbage($pdo));



function view($name, $data=[])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}