<?php

use Core\Database\QueryBuilder;
use Core\Router\Router;
use Core\Router\Request;

//Composer per autoload delle classi
require('vendor/autoload.php');

//File di inizializzazione per il collegamento al database
require('core/init.php');


Router::load('routes.php')
    ->direct(Request::uri(), Request::method());