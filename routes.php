<?php
//Metodo post per le form con method post
$router->post('family' , 'PagesController@family');
$router->post('calendar' , 'PagesController@calendar');


//Metodo get per tutti gli altri indirizzi
$router->get('' , 'PagesController@index');
$router->get('homepage' , 'PagesController@index');
$router->get('family' , 'PagesController@family');
$router->get('dashboard' , 'PagesController@dashboard');
$router->get('calendar' , 'PagesController@calendar');