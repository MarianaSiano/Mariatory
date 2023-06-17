<?php

use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Core\Router;

//--------------------------Rotas-------------------------------//
//
$router->get('dashboard', 'ExampleController@dashboard');
$router->get('listaPostAdm', 'ExampleController@listaPostAdm');

$router->get('', 'ExampleController@landingPage');
$router->get('vpost', 'ExampleController@vpost');

/*Login*/

//-> Processo para logar
$router->post('login/logar', 'LoginController@login');
//-> Retorna a página de login
$router->get('login', 'LoginController@view');
//-> Processo para deslogar
$router->get('login/logout', 'LoginController@logout');

/*Usuários*/

//-> Criação
$router->post('users/criarUsuario', 'UsuarioController@createUsers');
//-> Exibir todos os usuários
$router->get('listaDeUsuarios', 'UsuarioController@show');
//-> Deletar
$router->post('users/deletarUsuario', 'UsuarioController@deleteUsers');
//-> Editar
$router->post('users/editarUsuario', 'UsuarioController@editUsers');

/*Lista de Posts*/

//-> Exibição da página
$router->get('postList', 'PostListController@show');
//-> Busca de Posts
$router->get('buscar', 'PostListController@search');

