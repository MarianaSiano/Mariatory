<?php

use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Core\Router;

//--------------------------Rotas-------------------------------//

$router->get('dashboard', 'ExampleController@dashboard');
$router->get('listaPostAdm', 'ExampleController@listaPostAdm');

$router->get('landingPage', 'ExampleController@landingPage');
$router->get('postList', 'ExampleController@postList');
$router->get('vpost', 'ExampleController@vpost');

/*Login*/
//-> Processo para logar
$router->post('login/logar', 'LoginController@login');
//-> Retorna a página de login
$router->get('login', 'LoginController@view');

/*Usuários*/

//-> Criação
$router->post('users/criarUsuario', 'UsuarioController@createUsers');
//-> Exibir todos os usuários
$router->get('listaDeUsuarios', 'UsuarioController@show');
