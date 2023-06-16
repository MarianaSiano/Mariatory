<?php

use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Controllers\PostController;
use App\Core\Router;

//--------------------------Rotas-------------------------------//
//
$router->get('dashboard', 'ExampleController@dashboard');
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
//-> Deletar
$router->post('users/deletarUsuario', 'UsuarioController@deleteUsers');
//-> Editar
$router->post('users/editarUsuario', 'UsuarioController@editUsers');



/*posts*/

//-> Criação
$router->get('listaPostAdm', 'PostController@view');
$router->post('post/criarPost', 'PostController@create');
$router->get('teste', 'PostController@show');
$router->get('post/excluir', 'PostController@excluir');
$router->post('post/editar', 'PostController@editar');
/*
//-> Exibir todos os usuários
$router->get('listaDeUsuarios', 'UsuarioController@show');
//-> Deletar
$router->post('users/deletarUsuario', 'UsuarioController@deleteUsers');
//-> Editar
$router->post('users/editarUsuario', 'UsuarioController@editUsers');*/