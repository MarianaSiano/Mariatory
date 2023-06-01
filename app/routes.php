<?php

use App\Controllers\ExampleController;
use App\Core\Router;

$router->get('', 'ExampleController@teste');

$router->get('dashboard', 'ExampleController@dashboard');
$router->get('listaDeUsuarios', 'ExampleController@listaDeUsuarios');
$router->get('listaPostAdm', 'ExampleController@listaPostAdm');
$router->get('login', 'ExampleController@login');
$router->get('landingPage', 'ExampleController@landingPage');
$router->get('postList', 'ExampleController@postList');
$router->get('vpost', 'ExampleController@vpost');
