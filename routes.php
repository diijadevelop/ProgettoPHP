<?php
//Metodo post per le form con method post
$router->post('family' , 'PagesController@family');
// $router->post('form-result' , 'PagesController@form_result');
// $router->post('exercise' , 'PagesController@exercise');
// $router->post('table' , 'PagesController@table');


//Metodo get per tutti gli altri indirizzi
$router->get('' , 'PagesController@index');
$router->get('homepage' , 'PagesController@index');
$router->get('family' , 'PagesController@family');
$router->get('dashboard' , 'PagesController@dashboard');
// $router->get('family_read' , 'PagesController@family_read');
// $router->get('exercise' , 'PagesController@exercise');
// $router->get('form' , 'PagesController@form');
// $router->get('table' , 'PagesController@table');

//$router->get('register' , 'PagesController@register');


// $router->get('users', 'UsersController@users');