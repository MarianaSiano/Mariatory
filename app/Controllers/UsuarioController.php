<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuarioController{
    public function view(){
        return view('admin/listaDeUsuarios');
    }

    public function createUsers()
    {
        $parametros = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => hash("sha512", $_POST['password'])
        ];

        App::get('database') -> insertUsuarios($parametros);
        header('Location: /listaDeUsuarios');
    }
    
    public function show(){
        $users = App::get('database')->selectAll('users');

        $usersList = [
            'users' => $users
        ];

        return view('admin/listaDeUsuarios', $usersList);
    }

}
