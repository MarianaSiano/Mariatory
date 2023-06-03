<?php

use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Core\Router;

//--------------------------Rotas-------------------------------//

$router->get('dashboard', 'ExampleController@dashboard');
$router->get('listaDeUsuarios', 'ExampleController@listaDeUsuarios');
$router->get('listaPostAdm', 'ExampleController@listaPostAdm');

$router->get('landingPage', 'ExampleController@landingPage');
$router->get('postList', 'ExampleController@postList');
$router->get('vpost', 'ExampleController@vpost');

//Login
$router->post('login/logar', 'LoginController@login');
$router->get('login', 'LoginController@view');